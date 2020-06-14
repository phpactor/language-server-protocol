import {InterfaceDeclaration} from "typescript-parser/declarations";

export class Generator
{
    interfaceDeclaration(declaration: InterfaceDeclaration): void {
        const source: Array<string> = ['<?php'];
        console.log(declaration);

        source.push(``);
        source.push(`class ${declaration.name}`);
        source.push(`{`);

        for (const property of declaration.properties) {
            source.push(`    /**`);
            source.push(`     * @var ${property.type}`);
            source.push(`     */`);
            source.push(`    public $${property.name};`);
            source.push(``);
        }

        source.push(`}`);
        console.log(source);
    }
}
