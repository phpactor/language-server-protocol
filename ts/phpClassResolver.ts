import {
    InterfaceDeclaration,
    isPropertySignature,
    PropertySignature,
    JSDoc,
    isIdentifier
} from 'typescript';

import {PhpType, EntityMap, TypeConverter} from './typeConverter';

export class PhpClass {

    name: string;

    properties: Properties;

    mixins: string[];

}

export class Properties extends Map<string, Property> {
}

export class PhpClasses extends Map<string, PhpClass> {
}

export class Property {
    name: string;
    type: PhpType;
    nullable: boolean;
    docs: string[];
}

export class PhpClassResolver
{
    entityMap: EntityMap;
    typeConverter: TypeConverter;

    constructor(entityMap: EntityMap, typeConverter: TypeConverter)
    {
        this.entityMap = entityMap;
        this.typeConverter = typeConverter;
    }

    public fromEntityMap(entityMap: EntityMap): PhpClasses
    {
        const classes = new PhpClasses();

        entityMap.interfaces.forEach((interfaceDeclaration: InterfaceDeclaration) => {
            const phpClass = this.fromInterface(interfaceDeclaration);
            classes.set(phpClass.name, phpClass);
        });

        return classes;
    }

    private fromInterface(declaration: InterfaceDeclaration): PhpClass {

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
                nullable: property.questionToken ? true : false
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
                    const mixinClass = this.fromInterface(this.entityMap.interfaces.get(mixinName));
                    properties = new Map([ ... mixinClass.properties, ... properties ]);
                }
            }
        }

        return {
            name: declaration.name.escapedText.toString(),
            properties: properties as Properties,
            mixins: mixins
        } as PhpClass;
    }

    private jsDocs(property: PropertySignature): string[] {
        const jsDocs: JSDoc[] = property['jsDoc'];
        if (!jsDocs) {
            return [];
        }

        return [].concat.apply([], jsDocs.map((doc: JSDoc) => {
            return doc.comment.split("\r\n");
        }));
    }

}

