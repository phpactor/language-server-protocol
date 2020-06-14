import {TypescriptParser} from "typescript-parser/TypescriptParser";
import {InterfaceDeclaration} from "typescript-parser/declarations";
import path = require('path');
import {Generator} from "./generator";
import {Writer} from './writer';

const parser = new TypescriptParser();

class Transpiler
{
    writer: Writer;

    constructor (writer: Writer) {
        this.writer = writer;
    }

    async transpile(file: string): Promise<void> {
        const parsed = await parser.parseFile(
            path.resolve(file),
            path.resolve(__dirname, '/..')
        );

        const generator = new Generator();

        for (let declaration of parsed.declarations) {
            if (declaration instanceof InterfaceDeclaration) {
                this.writer.write(declaration.name, generator.interfaceDeclaration(declaration));
            }
        }
    }
}

(async () => {
    const transpiler = new Transpiler(new Writer(path.resolve(__dirname, '..', 'php')));
    await transpiler.transpile(path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib', 'protocol.d.ts'));
    await transpiler.transpile(path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib', 'protocol.foldingRange.d.ts'));
    await transpiler.transpile(path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-types', 'lib', 'umd', 'main.d.ts'));
})();
