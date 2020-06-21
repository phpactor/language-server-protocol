import {
    InterfaceDeclaration,
    isPropertySignature,
    PropertySignature,
    JSDoc,
    isIdentifier,
    TypeNode,
    IntersectionTypeNode,
    isUnionTypeNode,
    SyntaxKind,
    ModuleDeclaration,
    Node,
    isModuleBlock,
    isVariableDeclarationList,
    isVariableDeclaration,
    isLiteralTypeNode,
    isTypeNode
} from 'typescript';

import {PhpType, TypeConverter} from './typeConverter';
import {NodeMap} from './nodeMap';

export abstract class PhpClassLike {
    kind: string;
    name: string;
    docs: string[] = [];

    constructor(name: string, docs: string[] = []) {
        this.name = name;
        this.docs = docs;
    }
}

export class PhpInterface extends PhpClassLike {
    kind: string = 'interface';
    constants: PhpConstants

    constructor(name: string, docs: string[] = [], phpConstants: PhpConstants = new Map()) {
        super(name);
        this.constants = phpConstants;
    }
}

export class PhpConstant {
    name: string;
    rawValue: string;

    constructor (name: string, rawValue: string)
    {
        if (name.toLowerCase() === 'class') {
            name = 'class_';
        }
        this.name = name;
        this.rawValue = rawValue;
    }
}

export function isPhpInterface(phpClass: PhpClassLike): phpClass is PhpInterface {
    return phpClass.kind === 'interface';
}

export function isPhpClass(phpClass: PhpClassLike): phpClass is PhpClass {
    return phpClass.kind === 'class';
}

export class PhpClass extends PhpClassLike {
    kind: string = 'class';
    properties: Properties = new Properties();
    mixins: string[] = [];
}

export class Properties extends Map<string, Property> {
}

export class PhpConstants extends Map<string, PhpConstant> {
}
export class PhpClasses extends Map<string, PhpClassLike> {
}

export class Property {
    name: string;
    type: PhpType;
    nullable: boolean;
    docs: string[] = [];
}

export class PhpClassResolver
{
    nodeMap: NodeMap;
    typeConverter: TypeConverter;

    constructor(nodeMap: NodeMap, typeConverter: TypeConverter)
    {
        this.nodeMap = nodeMap;
        this.typeConverter = typeConverter;
    }

    public fromNodeMap(nodeMap: NodeMap): PhpClasses
    {
        const classes = new PhpClasses();

        nodeMap.modules.forEach((module: ModuleDeclaration, name: string) => {
            const phpInterface = this.interfaceFromModule(name, module);
            if (null === phpInterface) {
                return;
            }
            classes.set(name, phpInterface);
        });

        nodeMap.interfaces.forEach((interfaceDeclaration: InterfaceDeclaration) => {
            const phpClass = this.fromInterface(interfaceDeclaration);
            classes.set(phpClass.name, this.hydateMixins(phpClass));
        });

        nodeMap.intersections.forEach((type: IntersectionTypeNode, name: string) => {
            classes.set(name, this.fromIntersectionTypeNode(name, type));
        });

        return classes;
    }

    private fromIntersectionTypeNode(name: string, type: IntersectionTypeNode): PhpClass
    {
        const phpClass = new PhpClass(name);

        type.types.forEach((type: TypeNode) => {
            phpClass.mixins.push(this.typeConverter.phpType(type).real);
        });

        return this.hydateMixins(phpClass);
    }

    private fromInterface(declaration: InterfaceDeclaration): PhpClass {

        const docs = this.jsDocs(declaration);
        var properties = new Map<string, Property>();

        // change to Set
        const mixins = Array<string>();

        for (const property of declaration.members) {

            if (!isPropertySignature(property)) {
                continue;
            }

            if (!isIdentifier(property.name)) {
                continue;
            }

            const classProperty: Property = {
                docs: this.jsDocs(property),
                name: property.name.escapedText.toString(),
                type: this.typeConverter.phpType(property.type),
                nullable: this.isNullable(property)
            };

            properties.set(classProperty.name, classProperty);
        }

        if (declaration.heritageClauses) {
            for (const clause of declaration.heritageClauses) {
                for (const type of clause.types) {
                    if (!isIdentifier(type.expression)) {
                        continue;
                    }

                    const mixinName = type.expression.escapedText.toString();
                    mixins.push(mixinName);
                }
            }
        }

        const phpClass = new PhpClass(declaration.name.escapedText.toString(), docs);

        phpClass.properties = properties as Properties;
        phpClass.mixins = mixins;

        return phpClass;
    }

    private interfaceFromModule(name: string, module: ModuleDeclaration): PhpInterface|null {
        const constants = new PhpConstants();

        module.forEachChild((node: Node) => {
            if (!isModuleBlock(node)) {
                return;
            }

            node.statements.forEach((node: Node) => {
                node.forEachChild((node: Node)  => {
                    if (!isVariableDeclarationList(node)) {
                        return;
                    }
                    node.declarations.forEach((node: Node) => {
                        if (!isVariableDeclaration(node)) {
                            return;
                        }
                        if (!isIdentifier(node.name)) {
                            return;
                        }
                        if (!node.type) {
                            return;
                        }
                        if (!isLiteralTypeNode(node.type)) {
                            return;
                        }
                        constants.set(node.name.escapedText.toString(), new PhpConstant(
                            node.name.escapedText.toString(),
                            node.type.literal.getText()
                        ));
                    });
                });
            });
        });

        if (constants.size === 0) {
            return null;
        }

        return new PhpInterface(name, this.jsDocs(module), constants);
    }

    private hydateMixins(phpClass: PhpClass): PhpClass {
        var properties = phpClass.properties;
        phpClass.mixins.forEach((mixinName: string) => {
            if (!this.nodeMap.interfaces.has(mixinName)) {
                console.warn(`MixIn ${mixinName} is not a mapped interface`);
                return;
            }
            const mixinClass = this.fromInterface(this.nodeMap.interfaces.get(mixinName));

            properties = new Map([ ... properties, ... this.hydateMixins(mixinClass).properties ]);
        });
        phpClass.properties = properties;
        return phpClass;
    }

    private jsDocs(property: PropertySignature|InterfaceDeclaration|ModuleDeclaration): string[] {
        const jsDocs: JSDoc[] = property['jsDoc'];
        if (!jsDocs) {
            return [];
        }

        return [].concat.apply([], jsDocs.map((doc: JSDoc) => {
            if (!doc.comment) {
                return;
            }
            return doc.comment.split("\r\n");
        }));
    }

    private isNullable(property: PropertySignature): boolean {
        if (property.questionToken) {
            return true;
        }

        if (!property.type) {
            return false;
        }

        if (!isUnionTypeNode(property.type)) {
            return false;
        }

        for (const type of property.type.types) {
            if (SyntaxKind[type.kind] == 'NullKeyword') {
                return true;
            }
        }

        return false;
    }
}

