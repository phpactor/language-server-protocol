<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Represents programming constructs like functions or constructors in the context
 * of call hierarchy.
 */
class CallHierarchyItem
{
    /**
     * The name of this item.
     *
     * @var string
     */
    public $name;

    /**
     * The kind of this item.
     *
     * @var SymbolKind::*
     */
    public $kind;

    /**
     * Tags for this item.
     *
     * @var array<SymbolTag::*>|null
     */
    public $tags;

    /**
     * More detail for this item, e.g. the signature of a function.
     *
     * @var string|null
     */
    public $detail;

    /**
     * The resource identifier of this item.
     *
     * @var string
     */
    public $uri;

    /**
     * The range enclosing this symbol not including leading/trailing whitespace but everything else, e.g. comments and code.
     *
     * @var Range
     */
    public $range;

    /**
     * The range that should be selected and revealed when this symbol is being picked, e.g. the name of a function.
     * Must be contained by the [`range`](#CallHierarchyItem.range).
     *
     * @var Range
     */
    public $selectionRange;

    /**
     * A data entry field that is preserved between a call hierarchy prepare and
     * incoming calls or outgoing calls requests.
     *
     * @var |null
     */
    public $data;

    /**
     * @param string $name
     * @param SymbolKind::* $kind
     * @param array<SymbolTag::*>|null $tags
     * @param string|null $detail
     * @param string $uri
     * @param Range $range
     * @param Range $selectionRange
     * @param |null $data
     */
    public function __construct(string $name, $kind, string $uri, Range $range, Range $selectionRange, ?array $tags = null, ?string $detail = null, $data = null)
    {
        $this->name = $name;
        $this->kind = $kind;
        $this->tags = $tags;
        $this->detail = $detail;
        $this->uri = uridecode($uri);
        $this->range = $range;
        $this->selectionRange = $selectionRange;
        $this->data = $data;
    }

    /**
     * @param array<string,mixed> $array
     * @return static
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'name' => ['names' => [], 'iterable' => false],
            'kind' => ['names' => [], 'iterable' => false],
            'tags' => ['names' => [], 'iterable' => true],
            'detail' => ['names' => [], 'iterable' => false],
            'uri' => ['names' => [], 'iterable' => false],
            'range' => ['names' => [Range::class], 'iterable' => false],
            'selectionRange' => ['names' => [Range::class], 'iterable' => false],
            'data' => ['names' => [], 'iterable' => false],
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