import {
    InterfaceDeclaration,
    isPropertySignature,
    PropertySignature,
    JSDoc
} from 'typescript';

import {TypeConverter} from './typeConverter';

export class Generator
{
    converter: TypeConverter;

    constructor (converter: TypeConverter) {
        this.converter = converter;
    }
    interfaceDeclaration(declaration: InterfaceDeclaration): string {
        const source: Array<string> = ['<?php'];

        source.push(``);
        source.push(`namespace LanguageServerProtocol;`);
        source.push(``);
        source.push(`class ${declaration.name.escapedText}`);
        source.push(`{`);

        this.buildProperties(declaration, source);
        this.buildConstructorDefinition(declaration, source);

        source.push(`}`);
        console.log(source);

        return source.join("\n");
    }

    buildProperties(declaration: InterfaceDeclaration, source: array<string>): void {
        for (const property of declaration.members) {
            if (!isPropertySignature(property)) {
                continue;
            }

            source.push(`    /**`);
            for (const docLine of this.jsDocs(property)) {
                source.push(`     * ${docLine}`);
            }
            source.push(`     *`);
            source.push(`     * @var ${this.converter.phpType(property.type).documented}`);
            source.push(`     */`);
            source.push(`    public $${property.name.escapedText};`);
            source.push(``);
        }
    }

    buildConstructorDefinition(declaration: InterfaceDeclaration, source: string[]): void {
        const args: string[] = [];
        for (const property of declaration.members) {
            if (!isPropertySignature(property)) {
                continue;
            }

            const phpType = this.converter.phpType(property.type).real;

            args.push(`${phpType} $${property.name.escapedText}`);
        }

        if (args.length === 0) {
            return;
        }

        const argsString = args.join(', ');
        source.push(`    public function __construct(${argsString})`);
        source.push('    {');

        for (const property of declaration.members) {
            if (!isPropertySignature(property)) {
                continue;
            }

            source.push(`        $this->$${property.name.escapedText} = $this->$${property.name.escapedText};`);
        }
        source.push('    }');
    }

    jsDocs(property: PropertySignature): string[] {
        const jsDocs: array<string> = property.jsDoc;
        if (!jsDocs) {
            return [];
        }

        return [].concat.apply([], jsDocs.map((doc: JSDoc) => {
            return doc.comment.split("\r\n");
        }));
    }
}