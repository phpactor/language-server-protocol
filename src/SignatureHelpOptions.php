<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Server Capabilities for a [SignatureHelpRequest](#SignatureHelpRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class SignatureHelpOptions
{
    /**
     * List of characters that trigger signature help.
     *
     * @var array<string>|null
     */
    public $triggerCharacters;

    /**
     * List of characters that re-trigger signature help.
     * 
     * These trigger characters are only active when signature help is already showing. All trigger characters
     * are also counted as re-trigger characters.
     *
     * @var array<string>|null
     */
    public $retriggerCharacters;

    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param array<string>|null $triggerCharacters
     * @param array<string>|null $retriggerCharacters
     * @param bool|null $workDoneProgress
     */
    public function __construct(?array $triggerCharacters = null, ?array $retriggerCharacters = null, ?bool $workDoneProgress = null)
    {
        $this->triggerCharacters = $triggerCharacters;
        $this->retriggerCharacters = $retriggerCharacters;
        $this->workDoneProgress = $workDoneProgress;
    }

    /**
     * @param array<string,mixed> $array
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false): self
    {
        $map = [
            'triggerCharacters' => ['names' => [], 'iterable' => true],
            'retriggerCharacters' => ['names' => [], 'iterable' => true],
            'workDoneProgress' => ['names' => [], 'iterable' => false],
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