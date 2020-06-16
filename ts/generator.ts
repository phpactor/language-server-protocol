import {
    InterfaceDeclaration,
    isPropertySignature,
    PropertySignature,
    JSDoc,
    isIdentifier,
    SyntaxKind
} from 'typescript';

import {TypeConverter, PhpType} from './typeConverter';

class PhpClass {
    name: string;
    properties: Properties;
    mixins: string[];
}

class Properties extends Map<string, Property> {
}

class Property {
    name: string;
    type: PhpType;
    nullable: boolean;
    docs: string[];
}

export class Generator
{
    converter: TypeConverter;

    constructor (converter: TypeConverter) {
        this.converter = converter;
    }

    interfaceDeclaration(declaration: InterfaceDeclaration): string {
        const phpClass = this.resolvePhpClass(declaration);
        const source: Array<string> = ['<?php'];

        source.push(``);
        source.push(`namespace LanguageServerProtocol;`);
        source.push(``);

        if (phpClass.mixins.length > 0) {
            source.push(`/**`);
            source.push(' * implements ' + phpClass.mixins.join(', '));
            source.push(` */`);
        }

        source.push(`class ${phpClass.name}`);
        source.push(`{`);

        this.buildProperties(phpClass, source);
        this.buildConstructorDefinition(phpClass, source);

        source.push(`}`);
        //console.log(source);

        return source.join("\n");
    }

    resolvePhpClass(declaration: InterfaceDeclaration) {
        var properties = new Map<string, Property>();
        const mixins = Array<string>();

        for (const property  of declaration.members) {
            if (!isPropertySignature(property)) {
                continue;
            }

            if (!isIdentifier(property.name)) {
                continue;
            }

            const classProperty: Property = {
                docs: this.jsDocs(property),
                name: property.name.escapedText.toString(),
                type: this.converter.phpType(property.type),
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

                    mixins.push(type.expression.escapedText.toString());
                }
            }
        }

        return {
            name: declaration.name.escapedText.toString(),
            properties: properties as Properties,
            mixins: mixins
        } as PhpClass;
    }

    buildProperties(declaration: PhpClass, source: string[]): void {
        declaration.properties.forEach((property: Property) => {
            source.push(`    /**`);
            for (const docLine of property.docs) {
                source.push(`     * ${docLine}`);
            }
            source.push(`     *`);
            source.push(`     * @var ${this.renderPropertyType(property)}`);
            source.push(`     */`);
            source.push(`    public $${property.name};`);
            source.push(``);
        });
    }

    buildConstructorDefinition(declaration: PhpClass, source: string[]): void {
        const args: string[] = [];
        declaration.properties.forEach((property: Property) => {
            const arg = [];

            if (property.type.real && property.nullable) {
                arg.push('?');
            }

            if (property.type.real) {
                arg.push(`${property.type.real} `);
            }

            arg.push(`$${property.name}`);
            args.push(arg.join(''));
        });

        if (args.length === 0) {
            return;
        }

        source.push('    /**');
        declaration.properties.forEach((property: Property) => {
            source.push(`     * @param ${this.renderPropertyType(property)} $${property.name}`);
        });
        source.push('     */');

        const argsString = args.join(', ');
        source.push(`    public function __construct(${argsString})`);
        source.push('    {');

        declaration.properties.forEach((property: Property) => {
            source.push(`        $this->${property.name} = $${property.name};`);
        });
        source.push('    }');
    }

    jsDocs(property: PropertySignature): string[] {
        const jsDocs: JSDoc[] = property['jsDoc'];
        if (!jsDocs) {
            return [];
        }

        return [].concat.apply([], jsDocs.map((doc: JSDoc) => {
            return doc.comment.split("\r\n");
        }));
    }

    renderPropertyType(property: Property): string {
        let documentedType = property.type.documented;

        if (property.nullable) {
            documentedType = documentedType + '|null';
        }

        return documentedType;
    }
}
