import {createSourceFile, ScriptTarget, SyntaxKind, InterfaceDeclaration, isInterfaceDeclaration}  from "typescript"
import {readFileSync} from 'fs';
import {Writer} from './writer';
import {Generator} from "./generator";

export class Transpiler
{
    writer: Writer;
    generator: Generator;

    constructor (writer: Writer, generator: Generator) {
        this.writer = writer;
        this.generator = generator;
    }

    transpile(file: string[]): void {
        file.forEach((file) => {
            const node = createSourceFile(
                file,
                readFileSync(file, 'utf8'),
                ScriptTarget.Latest,
                true
            );

            node.forEachChild(node => {
                if (isInterfaceDeclaration(node)) {
                    const code = this.generator.interfaceDeclaration(node);
                    this.writer.write(node.name.escapedText.toString(), code);
                }
            });
        });
    }
}

