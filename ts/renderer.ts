import {PhpClass, Property, PhpClassLike, isPhpClass, isPhpInterface, PhpInterface, PhpConstant} from './phpClass';
import * as inflect from 'inflect';

export class Renderer
{
    render(phpClass: PhpClassLike): string {
        if (isPhpClass(phpClass)) {
            return this.renderClass(phpClass);
        }

        if (isPhpInterface(phpClass)) {
            return this.renderInterface(phpClass);
        }

        throw `Do not know how to render php class like`
    }
    
    private renderInterface(phpClass: PhpInterface): string {
        const source: Array<string> = ['<?php // Auto-generated from vscode-languageserver-protocol (typescript)'];
        source.push(``);
        source.push(`namespace Phpactor\\LanguageServerProtocol;`);
        source.push(``);
        source.push(`interface ${phpClass.name}`);
        source.push(`{`);

        phpClass.constants.forEach((constant: PhpConstant) => {
            const constName = inflect.underscore(constant.name) as string;
            source.push(`    public const ${constName.toUpperCase()} = ${constant.rawValue.replace(/`/g, '\'')};`);
        });

        source.push(`}`);

        return source.join("\n");
    }

    private renderClass(phpClass: PhpClass): string {
        const source: Array<string> = ['<?php // Auto-generated from vscode-languageserver-protocol (typescript)'];

        source.push(``);
        source.push(`namespace Phpactor\\LanguageServerProtocol;`);
        source.push(``);
        source.push(`use DTL\\Invoke\\Invoke;`);
        source.push(`use Exception;`);
        source.push(`use RuntimeException;`);
        source.push(``);

        if (phpClass.mixins.length > 0 || phpClass.docs.length > 0) {
            source.push(`/**`);
            phpClass.docs.forEach((line: string) => {
                if (typeof line === 'undefined') {
                    return;
                }
                for (const docLine of line.split("\n")) {
                    source.push(` * ${docLine}`);
                }
            });
            if (phpClass.mixins.length > 0 && phpClass.docs.length > 0) {
                source.push(` *`);
            }
            if (phpClass.mixins.length > 0) {
                source.push(' * Mixins (implemented TS interfaces): ' + phpClass.mixins.join(', '));
            }
            source.push(` */`);
        }

        let extendsClause = '';
        if (phpClass.extends) {
            extendsClause = ` extends ${phpClass.extends}`
        }

        source.push(`class ${phpClass.name}${extendsClause}`);
        source.push(`{`);

        this.buildProperties(phpClass, source);
        this.buildConstructorDefinition(phpClass, source);
        this.buildArrayConstructor(phpClass, source);

        source.push(`}`);

        return source.join("\n");
    }

    buildProperties(declaration: PhpClass, source: string[]): void {
        declaration.properties.forEach((property: Property) => {
            source.push(`    /**`);
            for (const docLine of property.docs) {
                for (const docLineLine of docLine.split("\n")) {
                    source.push(`     * ${docLineLine}`);
                }
            }
            source.push(`     *`);
            source.push(`     * @var ${this.renderPropertyType(property)}`);
            source.push(`     */`);
            source.push(`    public $${property.name};`);
            source.push(``);
        });
    }

    buildConstructorDefinition(declaration: PhpClass, source: string[]): void {
        const args: string[] = [];

        const properties: Property[] = Array.from(declaration.properties.values()).sort((property1: Property, property2: Property) => {
            if (property1.nullable === property2.nullable) {
                return 0;
            }

            if (property1.nullable) {
                return 1;
            }

            return -1;
        });

        properties.forEach((property: Property) => {
            const arg = [];

            if (property.type.real && property.nullable) {
                arg.push('?');
            }

            if (property.type.real) {
                arg.push(`${property.type.real} `);
            }

            arg.push(`$${property.name}`);

            if (property.nullable) {
                arg.push(' = null');
            }

            args.push(arg.join(''));
        });

        if (args.length === 0) {
            return;
        }

        source.push('    /**');
        declaration.properties.forEach((property: Property) => {
            source.push(`     * @param ${this.renderPropertyType(property)} $${property.name}`);
        });
        source.push('     */');

        const argsString = args.join(', ');
        source.push(`    public function __construct(${argsString})`);
        source.push('    {');

        declaration.properties.forEach((property: Property) => {
            // special handling for URIs
            if (-1 !== property.special.indexOf('uri')) {
                source.push(`        $this->${property.name} = urldecode($${property.name});`);
                return;
            }
            source.push(`        $this->${property.name} = $${property.name};`);
        });
        source.push('    }');
    }

    renderPropertyType(property: Property): string {
        let documentedType = property.type.documented;

        if (!documentedType.match(/null/) && property.nullable) {
            documentedType = documentedType + '|null';
        }

        return documentedType;
    }

    buildArrayConstructor(declaration: PhpClass, source: string[]): void {

        const normalizerSource = this.buildClassNormalizer(declaration, source).join("\n");

        source.push(`
    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        ${normalizerSource}
        return Invoke::new(self::class, $array);
    }

    /**
     * @param array<string> $classNames
     * @param array<string,mixed> $object
     */
    private static function invokeFromNames(array $classNames, array $object, bool $allowUnknownKeys): ?object
    {
        $lastException = null;
        foreach ($classNames as $className) {
            try {
                // @phpstan-ignore-next-line
                return call_user_func_array($className . '::fromArray', [$object, $allowUnknownKeys]);
            } catch (Exception $exception) {
                $lastException = $exception;
                continue;
            }
        }

        throw $lastException;
    }
        `);
    }

    buildClassNormalizer(declaration: PhpClass, source: string[]): string[] {
        const classResolutionSource = [
            '$map = [',
        ];

        declaration.properties.forEach((property: Property) => {
            const classNames = property.type.classNames.map((name) => {
                return name + '::class';
            }).join(', ');

            classResolutionSource.push(`            '${property.name}' => ['names' => [${classNames}], 'iterable' => ${property.type.iterable ? 'true':'false'}],`);
        });

        classResolutionSource.push('        ];'),
        classResolutionSource.push(`
        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                if ($allowUnknownKeys) {
                    unset($array[$key]);
                    continue;
                }

                throw new RuntimeException(sprintf(
                    'Parameter "%s" on class "%s" not known, known parameters: "%s"',
                    $key, 
                    self::class,
                    implode('", "', array_keys($map))
                ));
            }

            // from here we only care about arrays that can be transformed into
            // objects
            if (!is_array($value)) {
                continue;
            }

            if (empty($map[$key]['names'])) {
                continue;
            }

            if ($map[$key]['iterable']) {
                $value = array_map(function ($object) use ($map, $key, $allowUnknownKeys) {
                    if (!is_array($object)) {
                        return $object;
                    }

                    return self::invokeFromNames($map[$key]['names'], $object, $allowUnknownKeys) ?: $object;
                }, $value);
                continue;
            }

            $names = $map[$key]['names'];
            $value = self::invokeFromNames($names, $value, $allowUnknownKeys) ?: $value;
        }
        `);

        return classResolutionSource;
    }
}
