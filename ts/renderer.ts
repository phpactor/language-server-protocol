import {TypeConverter} from './typeConverter';
import {PhpClass, Property} from './phpClassResolver';

export class Renderer
{
    render(phpClass: PhpClass): string {

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

    renderPropertyType(property: Property): string {
        let documentedType = property.type.documented;

        if (property.nullable) {
            documentedType = documentedType + '|null';
        }

        return documentedType;
    }
}
