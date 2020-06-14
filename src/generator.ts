import {InterfaceDeclaration} from "typescript-parser/declarations";

export class Generator
{
    interfaceDeclaration(declaration: InterfaceDeclaration): string {
        const source: Array<string> = ['<?php'];

        if (declaration.name == 'FoldingRangeOptions') {
            console.log(declaration);
        }

        source.push(``);
        source.push(`namespace LanguageServerProtocol;`);
        source.push(``);
        source.push(`class ${declaration.name}`);
        source.push(`{`);

        for (const property of declaration.properties) {
            source.push(`    /**`);
            source.push(`     * @var ${this.phpType(property.type)}`);
            source.push(`     */`);
            source.push(`    public $${property.name};`);
            source.push(``);
        }

        source.push(`}`);

        return source.join("\n");
    }

    phpType(tsTypes: string): string {
        const types = tsTypes.split('|').map((tsType: string) => {
            const trimType = tsType.trim();
            switch (trimType) {
                case ('boolean'): return 'bool';
                case ('number'): return 'int';
            }
            return trimType;
        })

        return types.join('|');
    }
}
