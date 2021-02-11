<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Additional information that describes document changes.
 */
class ChangeAnnotation
{
    /**
     * A human-readable string describing the actual change. The string
     * is rendered prominent in the user interface.
     *
     * @var string
     */
    public $label;

    /**
     * A flag which indicates that user confirmation is needed
     * before applying the change.
     *
     * @var bool|null
     */
    public $needsConfirmation;

    /**
     * A human-readable string which is rendered less prominent in
     * the user interface.
     *
     * @var string|null
     */
    public $description;

    /**
     * @param string $label
     * @param bool|null $needsConfirmation
     * @param string|null $description
     */
    public function __construct(string $label, ?bool $needsConfirmation = null, ?string $description = null)
    {
        $this->label = $label;
        $this->needsConfirmation = $needsConfirmation;
        $this->description = $description;
    }

    /**
     * @param array<string,mixed> $array
     * @return static
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'label' => ['names' => [], 'iterable' => false],
            'needsConfirmation' => ['names' => [], 'iterable' => false],
            'description' => ['names' => [], 'iterable' => false],
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