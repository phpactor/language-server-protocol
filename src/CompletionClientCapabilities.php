<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Completion client capabilities
 */
class CompletionClientCapabilities
{
    /**
     * Whether completion supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * The client supports the following `CompletionItem` specific
     * capabilities.
     *
     * @var array<mixed>|null
     */
    public $completionItem;

    /**
     *
     * @var array<mixed>|null
     */
    public $completionItemKind;

    /**
     * Defines how the client handles whitespace and indentation
     * when accepting a completion item that uses multi line
     * text in either `insertText` or `textEdit`.
     *
     * @var InsertTextMode::*|null
     */
    public $insertTextMode;

    /**
     * The client supports to send additional context information for a
     * `textDocument/completion` request.
     *
     * @var bool|null
     */
    public $contextSupport;

    /**
     * @param bool|null $dynamicRegistration
     * @param array<mixed>|null $completionItem
     * @param array<mixed>|null $completionItemKind
     * @param InsertTextMode::*|null $insertTextMode
     * @param bool|null $contextSupport
     */
    public function __construct(?bool $dynamicRegistration = null, ?array $completionItem = null, ?array $completionItemKind = null, $insertTextMode = null, ?bool $contextSupport = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->completionItem = $completionItem;
        $this->completionItemKind = $completionItemKind;
        $this->insertTextMode = $insertTextMode;
        $this->contextSupport = $contextSupport;
    }

    /**
     * @param array<string,mixed> $array
     * @return static
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'dynamicRegistration' => ['names' => [], 'iterable' => false],
            'completionItem' => ['names' => [], 'iterable' => false],
            'completionItemKind' => ['names' => [], 'iterable' => false],
            'insertTextMode' => ['names' => [], 'iterable' => false],
            'contextSupport' => ['names' => [], 'iterable' => false],
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