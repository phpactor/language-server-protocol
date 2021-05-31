<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * A special text edit with an additional change annotation.
 *
 * Mixins (implemented TS interfaces): TextEdit
 */
class AnnotatedTextEdit extends TextEdit
{
    /**
     * The actual identifier of the change annotation
     *
     * @var string
     */
    public $annotationId;

    /**
     * The range of the text document to be manipulated. To insert
     * text into a document create a range where start === end.
     *
     * @var Range
     */
    public $range;

    /**
     * The string to be inserted. For delete operations use an
     * empty string.
     *
     * @var string
     */
    public $newText;

    /**
     * @param string $annotationId
     * @param Range $range
     * @param string $newText
     */
    public function __construct(string $annotationId, Range $range, string $newText)
    {
        $this->annotationId = $annotationId;
        $this->range = $range;
        $this->newText = $newText;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'annotationId' => ['names' => [], 'iterable' => false],
            'range' => ['names' => [Range::class], 'iterable' => false],
            'newText' => ['names' => [], 'iterable' => false],
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