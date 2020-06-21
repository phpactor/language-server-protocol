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
     * Capabilities specific to `WorkspaceEdit`s
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
     * @param bool|null $applyEdit
     * @param WorkspaceEditClientCapabilities|null $workspaceEdit
     * @param DidChangeConfigurationClientCapabilities|null $didChangeConfiguration
     * @param DidChangeWatchedFilesClientCapabilities|null $didChangeWatchedFiles
     * @param WorkspaceSymbolClientCapabilities|null $symbol
     * @param ExecuteCommandClientCapabilities|null $executeCommand
     */
    public function __construct(?bool $applyEdit = null, ?WorkspaceEditClientCapabilities $workspaceEdit = null, ?DidChangeConfigurationClientCapabilities $didChangeConfiguration = null, ?DidChangeWatchedFilesClientCapabilities $didChangeWatchedFiles = null, ?WorkspaceSymbolClientCapabilities $symbol = null, ?ExecuteCommandClientCapabilities $executeCommand = null)
    {
        $this->applyEdit = $applyEdit;
        $this->workspaceEdit = $workspaceEdit;
        $this->didChangeConfiguration = $didChangeConfiguration;
        $this->didChangeWatchedFiles = $didChangeWatchedFiles;
        $this->symbol = $symbol;
        $this->executeCommand = $executeCommand;
    }

    /**
     * @param array<string,mixed> $array
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