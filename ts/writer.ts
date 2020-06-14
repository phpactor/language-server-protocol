import * as fs from 'fs';
import * as path from 'path';

export class Writer
{
    outdir: string;

    constructor (outdir: string) {
        this.outdir = outdir;
    }

    write(name: string, contents: string): void {
        const outpath = `${this.outdir}/${name}.php`;

        if (!fs.existsSync(path.dirname(outpath))) {

            fs.mkdirSync(path.dirname(outpath), {
                recursive: true
            });

        }

        fs.writeFileSync(outpath, contents)
    }
}
