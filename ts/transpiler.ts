import {createSourceFile, ScriptTarget, SyntaxKind, InterfaceDeclaration, isInterfaceDeclaration, Node}  from "typescript"
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

    transpile(nodes: Node[]): void {

        nodes.forEach((node: Node) => {

            node.forEachChild(node => {
                if (isInterfaceDeclaration(node)) {
                    const code = this.generator.interfaceDeclaration(node);
                    this.writer.write(node.name.escapedText.toString(), code);
                }
            });

        });
    }
}

