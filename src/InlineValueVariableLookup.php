<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

class InlineValueVariableLookup
{
    /**
     * The document range for which the inline value applies.
     * The range is used to extract the variable name from the underlying document.
     *
     * @var Range
     */
    public $range;

    /**
     * If specified the name of the variable to look up.
     *
     * @var string|null
     */
    public $variableName;

    /**
     * How to perform the lookup.
     *
     * @var bool
     */
    public $caseSensitiveLookup;

    /**
     * @param Range $range
     * @param string|null $variableName
     * @param bool $caseSensitiveLookup
     */
    public function __construct(Range $range, bool $caseSensitiveLookup, ?string $variableName = null)
    {
        $this->range = $range;
        $this->variableName = $variableName;
        $this->caseSensitiveLookup = $caseSensitiveLookup;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'range' => ['names' => [Range::class], 'iterable' => false],
            'variableName' => ['names' => [], 'iterable' => false],
            'caseSensitiveLookup' => ['names' => [], 'iterable' => false],
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