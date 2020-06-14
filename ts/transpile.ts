import path = require('path');
import {Generator} from "./generator";
import {Writer} from './writer';
import {TypeConverter} from './typeConverter';
import {Transpiler} from './transpiler';

const paths: string[] = [
    path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib', 'protocol.d.ts'),
    path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-protocol', 'lib', 'protocol.foldingRange.d.ts'),
    path.resolve(__dirname, '..', 'node_modules', 'vscode-languageserver-types', 'lib', 'umd', 'main.d.ts'),
];

const transpiler = new Transpiler(
    new Writer(path.resolve(__dirname, '..', 'src')),
    new Generator(new TypeConverter())
);

transpiler.transpile(paths);
