import {
    InterfaceDeclaration,
    isPropertySignature,
    PropertySignature,
    JSDoc,
    isIdentifier,
    TypeNode,
    IntersectionTypeNode,
    isUnionTypeNode,
    SyntaxKind
} from 'typescript';

import {PhpType, TypeConverter} from './typeConverter';
import {NodeMap} from './nodeMap';

export class PhpClass {

    name: string;

    properties: Properties = new Properties();

    mixins: string[] = [];

    docs: string[] = [];
}

export class Properties extends Map<string, Property> {
}

export class PhpClasses extends Map<string, PhpClass> {
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
        const phpClass = new PhpClass();
        phpClass.name = name;

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

        return {
            name: declaration.name.escapedText.toString(),
            properties: properties as Properties,
            mixins: mixins,
            docs: docs
        } as PhpClass;
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

    private jsDocs(property: PropertySignature|InterfaceDeclaration): string[] {
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

