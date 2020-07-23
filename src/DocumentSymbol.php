<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Represents programming constructs like variables, classes, interfaces etc.
 * that appear in a document. Document symbols can be hierarchical and they
 * have two ranges: one that encloses its definition and one that points to
 * its most interesting range, e.g. the range of an identifier.
 */
class DocumentSymbol
{
    /**
     * The name of this symbol. Will be displayed in the user interface and therefore must not be
     * an empty string or a string only consisting of white spaces.
     *
     * @var string
     */
    public $name;

    /**
     * More detail for this symbol, e.g the signature of a function.
     *
     * @var string|null
     */
    public $detail;

    /**
     * The kind of this symbol.
     *
     * @var SymbolKind::*
     */
    public $kind;

    /**
     * Indicates if this symbol is deprecated.
     *
     * @var bool|null
     */
    public $deprecated;

    /**
     * The range enclosing this symbol not including leading/trailing whitespace but everything else
     * like comments. This information is typically used to determine if the the clients cursor is
     * inside the symbol to reveal in the symbol in the UI.
     *
     * @var Range
     */
    public $range;

    /**
     * The range that should be selected and revealed when this symbol is being picked, e.g the name of a function.
     * Must be contained by the the `range`.
     *
     * @var Range
     */
    public $selectionRange;

    /**
     * Children of this symbol, e.g. properties of a class.
     *
     * @var array<DocumentSymbol>|null
     */
    public $children;

    /**
     * @param string $name
     * @param string|null $detail
     * @param SymbolKind::* $kind
     * @param bool|null $deprecated
     * @param Range $range
     * @param Range $selectionRange
     * @param array<DocumentSymbol>|null $children
     */
    public function __construct(string $name, $kind, Range $range, Range $selectionRange, ?string $detail = null, ?bool $deprecated = null, ?array $children = null)
    {
        $this->name = $name;
        $this->detail = $detail;
        $this->kind = $kind;
        $this->deprecated = $deprecated;
        $this->range = $range;
        $this->selectionRange = $selectionRange;
        $this->children = $children;
    }

    /**
     * @param array<string,mixed> $array
     * @return static
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'name' => ['names' => [], 'iterable' => false],
            'detail' => ['names' => [], 'iterable' => false],
            'kind' => ['names' => [], 'iterable' => false],
            'deprecated' => ['names' => [], 'iterable' => false],
            'range' => ['names' => [Range::class], 'iterable' => false],
            'selectionRange' => ['names' => [Range::class], 'iterable' => false],
            'children' => ['names' => [DocumentSymbol::class], 'iterable' => true],
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