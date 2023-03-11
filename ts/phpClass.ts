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
    isTypeNode,
    forEachChild,
    isExportDeclaration,
    isExportSpecifier,
    HeritageClause,
    isExpressionWithTypeArguments,
    TypeLiteralNode,
    NodeArray,
    TypeElement
} from 'typescript';

import { PhpType, TypeConverter } from './typeConverter';
import { NodeMap } from './nodeMap';

function forEachDescendant(node, callback) {
    callback(node);
    forEachChild(node, (childNode: Node) => {
        forEachDescendant(childNode, callback);
    });
}

export function constantsFromModule(module: ModuleDeclaration): PhpConstants {
    const constants = new PhpConstants();

    forEachDescendant(module, (node: Node) => {
        if (!isVariableDeclaration(node)) {
            return false;
        }
        if (!isIdentifier(node.name)) {
            return false;
        }
        if (node.type && isLiteralTypeNode(node.type)) {
            constants.set(node.name.escapedText.toString(), new PhpConstant(
                node.name.escapedText.toString(),
                node.type.literal.getText()
            ));
            return false;
        }
        if (node.initializer) {
            constants.set(node.name.escapedText.toString(), new PhpConstant(
                node.name.escapedText.toString(),
                node.initializer.getText()
            ));
            return false;
        }
    });

    return constants;
}


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

    constructor(name: string, rawValue: string) {
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
    extends: string | null = null;
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
    special: string[] = [];
}

export class PhpClassResolver {
    nodeMap: NodeMap;
    typeConverter: TypeConverter;

    constructor(nodeMap: NodeMap, typeConverter: TypeConverter) {
        this.nodeMap = nodeMap;
        this.typeConverter = typeConverter;
    }

    public fromNodeMap(nodeMap: NodeMap): PhpClasses {
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

        nodeMap.typeLiterals.forEach((type, name: string) => {
            classes.set(name, this.fromTypeLiteral(name, type));
        });

        return classes;
    }

    private fromTypeLiteral(name: string, type: TypeLiteralNode): PhpClass {
        const phpClass = new PhpClass(name);
        const properties = this.mapProperties(type.members);
        phpClass.properties = properties;

        return phpClass;
    }

    private fromIntersectionTypeNode(name: string, type: IntersectionTypeNode): PhpClass {
        const phpClass = new PhpClass(name);

        type.types.forEach((type: TypeNode) => {
            phpClass.mixins.push(this.typeConverter.phpType(type).real);
        });

        return this.hydateMixins(phpClass);
    }

    private fromInterface(declaration: InterfaceDeclaration): PhpClass {

        const docs = this.jsDocs(declaration);
        let phpClass = new PhpClass(declaration.name.escapedText.toString(), docs);

        // change to Set
        const mixins = Array<string>();

        for (const heritageClause of declaration.heritageClauses ?? []) {
            if (SyntaxKind[heritageClause.token] === 'ExtendsKeyword') {
                phpClass.extends = this.resolveClassParent(heritageClause);
            }
        }

        const properties = this.mapProperties(declaration.members);

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

        phpClass.properties = properties;
        phpClass.mixins = mixins;

        return phpClass;
    }

    private mapProperties(members: NodeArray<TypeElement>): Map<string,Property> {
        var properties = new Map<string, Property>();
        for (const property of members) {
            let special = [];
            if (!isPropertySignature(property)) {
                continue;
            }

            if (!isIdentifier(property.name)) {
                continue;
            }

            if (property.type.getText().match(/^DocumentUri$/)) {
                special.push('uri');
            }

            const classProperty: Property = {
                docs: this.jsDocs(property),
                name: property.name.escapedText.toString(),
                type: this.typeConverter.phpType(property.type),
                nullable: this.isNullable(property),
                special
            };

            properties.set(classProperty.name, classProperty);
        }

        return properties;
    }

    private interfaceFromModule(name: string, module: ModuleDeclaration): PhpInterface | null {
        const constants = constantsFromModule(module);

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

            properties = new Map([...properties, ... this.hydateMixins(mixinClass).properties]);
        });
        phpClass.properties = properties;
        return phpClass;
    }

    private jsDocs(property: PropertySignature | InterfaceDeclaration | ModuleDeclaration): string[] {
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

    private resolveClassParent(extendsClause: HeritageClause): string | null {
        const types = extendsClause.types.filter((element) => {
            return isExpressionWithTypeArguments(element);
        }).map((element) => {
            return element.getText();
        });

        if (types.length === 0) {
            return null;
        }

        return types[0];
    }
}

