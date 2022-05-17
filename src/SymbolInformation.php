<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Represents information about programming constructs like variables, classes,
 * interfaces etc.
 *
 * Mixins (implemented TS interfaces): BaseSymbolInformation
 */
class SymbolInformation extends BaseSymbolInformation
{
    /**
     * Indicates if this symbol is deprecated.
     *
     * @var bool|null
     */
    public $deprecated;

    /**
     * The location of this symbol. The location's range is used by a tool
     * to reveal the location in the editor. If the symbol is selected in the
     * tool the range's start information is used to position the cursor. So
     * the range usually spans more than the actual symbol's name and does
     * normally include thinks like visibility modifiers.
     * 
     * The range doesn't have to denote a node range in the sense of a abstract
     * syntax tree. It can therefore not be used to re-construct a hierarchy of
     * the symbols.
     *
     * @var Location
     */
    public $location;

    /**
     * The name of this symbol.
     *
     * @var string
     */
    public $name;

    /**
     * The kind of this symbol.
     *
     * @var SymbolKind::*
     */
    public $kind;

    /**
     * Tags for this completion item.
     *
     * @var array<SymbolTag::*>|null
     */
    public $tags;

    /**
     * The name of the symbol containing this symbol. This information is for
     * user interface purposes (e.g. to render a qualifier in the user interface
     * if necessary). It can't be used to re-infer a hierarchy for the document
     * symbols.
     *
     * @var string|null
     */
    public $containerName;

    /**
     * @param bool|null $deprecated
     * @param Location $location
     * @param string $name
     * @param SymbolKind::* $kind
     * @param array<SymbolTag::*>|null $tags
     * @param string|null $containerName
     */
    public function __construct(Location $location, string $name, $kind, ?bool $deprecated = null, ?array $tags = null, ?string $containerName = null)
    {
        $this->deprecated = $deprecated;
        $this->location = $location;
        $this->name = $name;
        $this->kind = $kind;
        $this->tags = $tags;
        $this->containerName = $containerName;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false): self
    {
        $map = [
            'deprecated' => ['names' => [], 'iterable' => false],
            'location' => ['names' => [Location::class], 'iterable' => false],
            'name' => ['names' => [], 'iterable' => false],
            'kind' => ['names' => [], 'iterable' => false],
            'tags' => ['names' => [], 'iterable' => true],
            'containerName' => ['names' => [], 'iterable' => false],
        ];

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
        
}