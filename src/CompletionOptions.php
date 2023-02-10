<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Completion options.
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class CompletionOptions extends WorkDoneProgressOptions
{
    /**
     * Most tools trigger completion request automatically without explicitly requesting
     * it using a keyboard shortcut (e.g. Ctrl+Space). Typically they do so when the user
     * starts to type an identifier. For example if the user types `c` in a JavaScript file
     * code complete will automatically pop up present `console` besides others as a
     * completion item. Characters that make up identifiers don't need to be listed here.
     * 
     * If code complete should automatically be trigger on characters not being valid inside
     * an identifier (for example `.` in JavaScript) list them in `triggerCharacters`.
     *
     * @var array<string>|null
     */
    public $triggerCharacters;

    /**
     * The list of all possible characters that commit a completion. This field can be used
     * if clients don't support individual commit characters per completion item. See
     * `ClientCapabilities.textDocument.completion.completionItem.commitCharactersSupport`
     * 
     * If a server provides both `allCommitCharacters` and commit characters on an individual
     * completion item the ones on the completion item win.
     *
     * @var array<string>|null
     */
    public $allCommitCharacters;

    /**
     * The server provides support to resolve additional
     * information for a completion item.
     *
     * @var bool|null
     */
    public $resolveProvider;

    /**
     * The server supports the following `CompletionItem` specific
     * capabilities.
     *
     * @var array<mixed>|null
     */
    public $completionItem;

    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param array<string>|null $triggerCharacters
     * @param array<string>|null $allCommitCharacters
     * @param bool|null $resolveProvider
     * @param array<mixed>|null $completionItem
     * @param bool|null $workDoneProgress
     */
    public function __construct(?array $triggerCharacters = null, ?array $allCommitCharacters = null, ?bool $resolveProvider = null, ?array $completionItem = null, ?bool $workDoneProgress = null)
    {
        $this->triggerCharacters = $triggerCharacters;
        $this->allCommitCharacters = $allCommitCharacters;
        $this->resolveProvider = $resolveProvider;
        $this->completionItem = $completionItem;
        $this->workDoneProgress = $workDoneProgress;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'triggerCharacters' => ['names' => [], 'iterable' => true],
            'allCommitCharacters' => ['names' => [], 'iterable' => true],
            'resolveProvider' => ['names' => [], 'iterable' => false],
            'completionItem' => ['names' => [], 'iterable' => false],
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