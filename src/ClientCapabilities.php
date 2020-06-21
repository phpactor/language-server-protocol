<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Mixins (implemented TS interfaces): _ClientCapabilities, WorkspaceFoldersClientCapabilities, ConfigurationClientCapabilities, WorkDoneProgressClientCapabilities
 */
class ClientCapabilities
{
    /**
     * The workspace client capabilities
     *
     * @var array<mixed>|null
     */
    public $workspace;

    /**
     * Text document specific client capabilities.
     *
     * @var TextDocumentClientCapabilities|null
     */
    public $textDocument;

    /**
     * Window specific client capabilities.
     *
     * @var array<mixed>|null
     */
    public $window;

    /**
     * Experimental client capabilities.
     *
     * @var object|null
     */
    public $experimental;

    /**
     * @param array<mixed>|null $workspace
     * @param TextDocumentClientCapabilities|null $textDocument
     * @param array<mixed>|null $window
     * @param object|null $experimental
     */
    public function __construct(?array $workspace = null, ?TextDocumentClientCapabilities $textDocument = null, ?array $window = null, ?object $experimental = null)
    {
        $this->workspace = $workspace;
        $this->textDocument = $textDocument;
        $this->window = $window;
        $this->experimental = $experimental;
    }

    /**
     * @param array<string,mixed> $array
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false): self
    {
        $map = [
            'workspace' => ['names' => [], 'iterable' => false],
            'textDocument' => ['names' => [TextDocumentClientCapabilities::class], 'iterable' => false],
            'window' => ['names' => [], 'iterable' => false],
            'experimental' => ['names' => [], 'iterable' => false],
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