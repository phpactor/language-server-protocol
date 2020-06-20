import {TypeConverter} from './typeConverter';
import {PhpClass, Property} from './phpClassResolver';

export class Renderer
{
    render(phpClass: PhpClass): string {

        const source: Array<string> = ['<?php // Auto-generated from vscode-languageserver-protocol (typescript)'];

        source.push(``);
        source.push(`namespace LanguageServerProtocol;`);
        source.push(``);

        if (phpClass.mixins.length > 0 || phpClass.docs.length > 0) {
            source.push(`/**`);
            phpClass.docs.forEach((line: string) => {
                source.push(` * ${line}`);
            });
            if (phpClass.mixins.length > 0 && phpClass.docs.length > 0) {
                source.push(` *`);
            }
            if (phpClass.mixins.length > 0) {
                source.push(' * Mixins (implemented TS interfaces): ' + phpClass.mixins.join(', '));
            }
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

        const properties: Property[] = Array.from(declaration.properties.values()).sort((property1: Property, property2: Property) => {
            if (property1.nullable === property2.nullable) {
                return 0;
            }

            if (property1.nullable) {
                return 1;
            }

            return -1;
        });

        properties.forEach((property: Property) => {
            const arg = [];

            if (property.type.real && property.nullable) {
                arg.push('?');
            }

            if (property.type.real) {
                arg.push(`${property.type.real} `);
            }

            arg.push(`$${property.name}`);

            if (property.nullable) {
                arg.push(' = null');
            }

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

    renderPropertyType(property: Property): string {
        let documentedType = property.type.documented;

        if (!documentedType.match(/null/) && property.nullable) {
            documentedType = documentedType + '|null';
        }

        return documentedType;
    }
}
