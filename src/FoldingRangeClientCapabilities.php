<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

class FoldingRangeClientCapabilities
{
    /**
     * Whether implementation supports dynamic registration for folding range
     * providers. If this is set to `true` the client supports the new
     * `FoldingRangeRegistrationOptions` return value for the corresponding
     * server capability as well.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * The maximum number of folding ranges that the client prefers to receive
     * per document. The value serves as a hint, servers are free to follow the
     * limit.
     *
     * @var int|null
     */
    public $rangeLimit;

    /**
     * If set, the client signals that it only supports folding complete lines.
     * If set, client will ignore specified `startCharacter` and `endCharacter`
     * properties in a FoldingRange.
     *
     * @var bool|null
     */
    public $lineFoldingOnly;

    /**
     * Specific options for the folding range kind.
     *
     * @var array{valueSet:array<FoldingRangeKind::*>}|null
     */
    public $foldingRangeKind;

    /**
     * Specific options for the folding range.
     *
     * @var array{collapsedText:bool}|null
     */
    public $foldingRange;

    /**
     * @param bool|null $dynamicRegistration
     * @param int|null $rangeLimit
     * @param bool|null $lineFoldingOnly
     * @param array{valueSet:array<FoldingRangeKind::*>}|null $foldingRangeKind
     * @param array{collapsedText:bool}|null $foldingRange
     */
    public function __construct(?bool $dynamicRegistration = null, ?int $rangeLimit = null, ?bool $lineFoldingOnly = null, ?array $foldingRangeKind = null, ?array $foldingRange = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->rangeLimit = $rangeLimit;
        $this->lineFoldingOnly = $lineFoldingOnly;
        $this->foldingRangeKind = $foldingRangeKind;
        $this->foldingRange = $foldingRange;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'dynamicRegistration' => ['names' => [], 'iterable' => false],
            'rangeLimit' => ['names' => [], 'iterable' => false],
            'lineFoldingOnly' => ['names' => [], 'iterable' => false],
            'foldingRangeKind' => ['names' => [], 'iterable' => false],
            'foldingRange' => ['names' => [], 'iterable' => false],
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