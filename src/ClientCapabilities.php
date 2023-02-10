<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Defines the capabilities provided by the client.
 */
class ClientCapabilities
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
     * Capabilities specific to the notebook document support.
     *
     * @var NotebookDocumentClientCapabilities|null
     */
    public $notebookDocument;

    /**
     * Window specific client capabilities.
     *
     * @var WindowClientCapabilities|null
     */
    public $window;

    /**
     * General client capabilities.
     *
     * @var GeneralClientCapabilities|null
     */
    public $general;

    /**
     * Experimental client capabilities.
     *
     * @var mixed|null
     */
    public $experimental;

    /**
     * @param WorkspaceClientCapabilities|null $workspace
     * @param TextDocumentClientCapabilities|null $textDocument
     * @param NotebookDocumentClientCapabilities|null $notebookDocument
     * @param WindowClientCapabilities|null $window
     * @param GeneralClientCapabilities|null $general
     * @param mixed|null $experimental
     */
    public function __construct(?WorkspaceClientCapabilities $workspace = null, ?TextDocumentClientCapabilities $textDocument = null, ?NotebookDocumentClientCapabilities $notebookDocument = null, ?WindowClientCapabilities $window = null, ?GeneralClientCapabilities $general = null, $experimental = null)
    {
        $this->workspace = $workspace;
        $this->textDocument = $textDocument;
        $this->notebookDocument = $notebookDocument;
        $this->window = $window;
        $this->general = $general;
        $this->experimental = $experimental;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false): self
    {
        $map = [
            'workspace' => ['names' => [WorkspaceClientCapabilities::class], 'iterable' => false],
            'textDocument' => ['names' => [TextDocumentClientCapabilities::class], 'iterable' => false],
            'notebookDocument' => ['names' => [NotebookDocumentClientCapabilities::class], 'iterable' => false],
            'window' => ['names' => [WindowClientCapabilities::class], 'iterable' => false],
            'general' => ['names' => [GeneralClientCapabilities::class], 'iterable' => false],
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