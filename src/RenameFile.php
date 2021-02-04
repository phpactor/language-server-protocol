<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Rename file operation
 *
 * Mixins (implemented TS interfaces): ResourceOperation
 */
class RenameFile extends ResourceOperation
{
    /**
     * The resource operation kind.
     *
     * @var string
     */
    public $kind;

    /**
     * The old (existing) location.
     *
     * @var string
     */
    public $oldUri;

    /**
     * The new location.
     *
     * @var string
     */
    public $newUri;

    /**
     * Rename options.
     *
     * @var RenameFileOptions|null
     */
    public $options;

    /**
     * An optional annotation identifier describing the operation.
     *
     * @var string|null
     */
    public $annotationId;

    /**
     * @param string $kind
     * @param string $oldUri
     * @param string $newUri
     * @param RenameFileOptions|null $options
     * @param string|null $annotationId
     */
    public function __construct(string $kind, string $oldUri, string $newUri, ?RenameFileOptions $options = null, ?string $annotationId = null)
    {
        $this->kind = $kind;
        $this->oldUri = $oldUri;
        $this->newUri = $newUri;
        $this->options = $options;
        $this->annotationId = $annotationId;
    }

    /**
     * @param array<string,mixed> $array
     * @return static
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'kind' => ['names' => [], 'iterable' => false],
            'oldUri' => ['names' => [], 'iterable' => false],
            'newUri' => ['names' => [], 'iterable' => false],
            'options' => ['names' => [RenameFileOptions::class], 'iterable' => false],
            'annotationId' => ['names' => [], 'iterable' => false],
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