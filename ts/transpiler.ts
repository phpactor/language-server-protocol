import {Writer} from './writer';
import {PhpClasses, PhpClass, PhpClassLike} from './phpClass';
import {Renderer} from './renderer';

export class Transpiler
{
    writer: Writer;
    renderer: Renderer;

    constructor (writer: Writer, renderer: Renderer) {
        this.writer = writer;
        this.renderer = renderer;
    }

    transpile(phpClasses: PhpClasses): void {
        phpClasses.forEach((phpClass: PhpClassLike) => {
            this.writer.write(phpClass.name, this.renderer.render(phpClass));
        });
    }
}

