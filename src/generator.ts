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

        source.push(`}`);
        console.log(source);

        return source.join("\n");
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
