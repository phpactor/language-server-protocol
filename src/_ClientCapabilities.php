<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Defines the capabilities provided by the client.
 */
class _ClientCapabilities
{
    /**
     * Workspace specific client capabilities.
     *
     * @var WorkspaceClientCapabilities|null
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
     * @var object|null
     */
    public $window;

    /**
     * Experimental client capabilities.
     *
     * @var object|null
     */
    public $experimental;

    /**
     * @param WorkspaceClientCapabilities|null $workspace
     * @param TextDocumentClientCapabilities|null $textDocument
     * @param object|null $window
     * @param object|null $experimental
     */
    public function __construct(?WorkspaceClientCapabilities $workspace = null, ?TextDocumentClientCapabilities $textDocument = null, ?object $window = null, ?object $experimental = null)
    {
        $this->workspace = $workspace;
        $this->textDocument = $textDocument;
        $this->window = $window;
        $this->experimental = $experimental;
    }

    /**
     * @param array<string,mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'workspace' => ['names' => [WorkspaceClientCapabilities::class], 'iterable' => false],
            'textDocument' => ['names' => [TextDocumentClientCapabilities::class], 'iterable' => false],
        ];

        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                continue;
            }

            if ($map[$key]['iterable']) {
                $value = array_map(function ($object) use ($map, $key) {
                    if (!is_array($object)) {
                        return $object;
                    }

                    return self::invokeFromNames($map[$key]['names'], $object) ?: $object;
                }, $value);
                continue;
            }

            $names = $map[$key]['names'];
            $value = self::invokeFromNames($names, $value) ?: $value;
        }
        
        return Invoke::new(self::class, $array);
    }

    /**
     * @param array<string> $classNames
     * @param array<string,mixed> $object
     */
    private static function invokeFromNames(array $classNames, array $object): ?object
    {
        foreach ($classNames as $className) {
            try {
                // @phpstan-ignore-next-line
                return call_user_func_array($className . '::fromArray', [$object]);
            } catch (Exception $e) {
                continue;
            }
        }

        return null;
    }
        
}