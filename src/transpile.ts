import {createSourceFile, ScriptTarget, SyntaxKind, InterfaceDeclaration}  from "typescript"
import path = require('path');
import {Generator} from "./generator";
import {Writer} from './writer';
import {readFileSync} from 'fs';

class Transpiler
{
    writer: Writer;
    generator: Generator;

    constructor (writer: Writer, generator: Generator) {
        this.writer = writer;
        this.generator = generator;
    }

    async transpile(file: string): Promise<void> {
        const node = createSourceFile(
            file,
            readFileSync(file, 'utf8'),
            ScriptTarget.Latest,
            true
        );
        node.forEachChild(node => {
            if (SyntaxKind[node.kind] == 'InterfaceDeclaration') {
                this.generator.interfaceDeclaration(node);
            }
        });
    }
}

(async () => {
    const transpiler = new Transpiler(
        new Writer(path.resolve(__dirname, '..', 'php')),
        new Generator()
    );
    await transpiler.transpile(path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib', 'protocol.d.ts'));
    await transpiler.transpile(path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib', 'protocol.foldingRange.d.ts'));
    await transpiler.transpile(path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-types', 'lib', 'umd', 'main.d.ts'));
})();
