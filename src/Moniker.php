<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Moniker definition to match LSIF 0.5 moniker definition.
 */
class Moniker
{
    /**
     * The scheme of the moniker. For example tsc or .Net
     *
     * @var string
     */
    public $scheme;

    /**
     * The identifier of the moniker. The value is opaque in LSIF however
     * schema owners are allowed to define the structure if they want.
     *
     * @var string
     */
    public $identifier;

    /**
     * The scope in which the moniker is unique
     *
     * @var mixed
     */
    public $unique;

    /**
     * The moniker kind if known.
     *
     * @var mixed|null
     */
    public $kind;

    /**
     * @param string $scheme
     * @param string $identifier
     * @param mixed $unique
     * @param mixed|null $kind
     */
    public function __construct(string $scheme, string $identifier, $unique, $kind = null)
    {
        $this->scheme = $scheme;
        $this->identifier = $identifier;
        $this->unique = $unique;
        $this->kind = $kind;
    }

    /**
     * @param array<string,mixed> $array
     * @return static
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'scheme' => ['names' => [], 'iterable' => false],
            'identifier' => ['names' => [], 'iterable' => false],
            'unique' => ['names' => [], 'iterable' => false],
            'kind' => ['names' => [], 'iterable' => false],
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