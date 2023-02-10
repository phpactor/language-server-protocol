<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Workspace specific client capabilities.
 */
class WorkspaceClientCapabilities
{
    /**
     * The client supports applying batch edits
     * to the workspace by supporting the request
     * 'workspace/applyEdit'
     *
     * @var bool|null
     */
    public $applyEdit;

    /**
     * Capabilities specific to `WorkspaceEdit`s.
     *
     * @var WorkspaceEditClientCapabilities|null
     */
    public $workspaceEdit;

    /**
     * Capabilities specific to the `workspace/didChangeConfiguration` notification.
     *
     * @var DidChangeConfigurationClientCapabilities|null
     */
    public $didChangeConfiguration;

    /**
     * Capabilities specific to the `workspace/didChangeWatchedFiles` notification.
     *
     * @var DidChangeWatchedFilesClientCapabilities|null
     */
    public $didChangeWatchedFiles;

    /**
     * Capabilities specific to the `workspace/symbol` request.
     *
     * @var WorkspaceSymbolClientCapabilities|null
     */
    public $symbol;

    /**
     * Capabilities specific to the `workspace/executeCommand` request.
     *
     * @var ExecuteCommandClientCapabilities|null
     */
    public $executeCommand;

    /**
     * The client has support for workspace folders.
     *
     * @var bool|null
     */
    public $workspaceFolders;

    /**
     * The client supports `workspace/configuration` requests.
     *
     * @var bool|null
     */
    public $configuration;

    /**
     * Capabilities specific to the semantic token requests scoped to the
     * workspace.
     *
     * @var mixed|null
     */
    public $semanticTokens;

    /**
     * Capabilities specific to the code lens requests scoped to the
     * workspace.
     *
     * @var CodeLensWorkspaceClientCapabilities|null
     */
    public $codeLens;

    /**
     * The client has support for file notifications/requests for user operations on files.
     * 
     * Since 3.16.0
     *
     * @var mixed|null
     */
    public $fileOperations;

    /**
     * Capabilities specific to the inline values requests scoped to the
     * workspace.
     *
     * @var mixed|null
     */
    public $inlineValue;

    /**
     * Capabilities specific to the inlay hint requests scoped to the
     * workspace.
     *
     * @var mixed|null
     */
    public $inlayHint;

    /**
     * Capabilities specific to the diagnostic requests scoped to the
     * workspace.
     *
     * @var mixed|null
     */
    public $diagnostics;

    /**
     * @param bool|null $applyEdit
     * @param WorkspaceEditClientCapabilities|null $workspaceEdit
     * @param DidChangeConfigurationClientCapabilities|null $didChangeConfiguration
     * @param DidChangeWatchedFilesClientCapabilities|null $didChangeWatchedFiles
     * @param WorkspaceSymbolClientCapabilities|null $symbol
     * @param ExecuteCommandClientCapabilities|null $executeCommand
     * @param bool|null $workspaceFolders
     * @param bool|null $configuration
     * @param mixed|null $semanticTokens
     * @param CodeLensWorkspaceClientCapabilities|null $codeLens
     * @param mixed|null $fileOperations
     * @param mixed|null $inlineValue
     * @param mixed|null $inlayHint
     * @param mixed|null $diagnostics
     */
    public function __construct(?bool $applyEdit = null, ?WorkspaceEditClientCapabilities $workspaceEdit = null, ?DidChangeConfigurationClientCapabilities $didChangeConfiguration = null, ?DidChangeWatchedFilesClientCapabilities $didChangeWatchedFiles = null, ?WorkspaceSymbolClientCapabilities $symbol = null, ?ExecuteCommandClientCapabilities $executeCommand = null, ?bool $workspaceFolders = null, ?bool $configuration = null, $semanticTokens = null, ?CodeLensWorkspaceClientCapabilities $codeLens = null, $fileOperations = null, $inlineValue = null, $inlayHint = null, $diagnostics = null)
    {
        $this->applyEdit = $applyEdit;
        $this->workspaceEdit = $workspaceEdit;
        $this->didChangeConfiguration = $didChangeConfiguration;
        $this->didChangeWatchedFiles = $didChangeWatchedFiles;
        $this->symbol = $symbol;
        $this->executeCommand = $executeCommand;
        $this->workspaceFolders = $workspaceFolders;
        $this->configuration = $configuration;
        $this->semanticTokens = $semanticTokens;
        $this->codeLens = $codeLens;
        $this->fileOperations = $fileOperations;
        $this->inlineValue = $inlineValue;
        $this->inlayHint = $inlayHint;
        $this->diagnostics = $diagnostics;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false): self
    {
        $map = [
            'applyEdit' => ['names' => [], 'iterable' => false],
            'workspaceEdit' => ['names' => [WorkspaceEditClientCapabilities::class], 'iterable' => false],
            'didChangeConfiguration' => ['names' => [DidChangeConfigurationClientCapabilities::class], 'iterable' => false],
            'didChangeWatchedFiles' => ['names' => [DidChangeWatchedFilesClientCapabilities::class], 'iterable' => false],
            'symbol' => ['names' => [WorkspaceSymbolClientCapabilities::class], 'iterable' => false],
            'executeCommand' => ['names' => [ExecuteCommandClientCapabilities::class], 'iterable' => false],
            'workspaceFolders' => ['names' => [], 'iterable' => false],
            'configuration' => ['names' => [], 'iterable' => false],
            'semanticTokens' => ['names' => [], 'iterable' => false],
            'codeLens' => ['names' => [CodeLensWorkspaceClientCapabilities::class], 'iterable' => false],
            'fileOperations' => ['names' => [], 'iterable' => false],
            'inlineValue' => ['names' => [], 'iterable' => false],
            'inlayHint' => ['names' => [], 'iterable' => false],
            'diagnostics' => ['names' => [], 'iterable' => false],
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