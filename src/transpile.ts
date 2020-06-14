import {TypescriptParser} from "typescript-parser/TypescriptParser";
import {InterfaceDeclaration} from "typescript-parser/declarations";
import path = require('path');
import {Generator} from "./generator";

const parser = new TypescriptParser();

(async () => {
    const parsed = await parser.parseFile(
        path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib/protocol.d.ts'),
        path.resolve(__dirname, '/..')
    );

    const generator = new Generator();

    for (let declaration of parsed.declarations) {
        if (declaration instanceof InterfaceDeclaration) {
            generator.interfaceDeclaration(declaration);
        }
    }
})();


