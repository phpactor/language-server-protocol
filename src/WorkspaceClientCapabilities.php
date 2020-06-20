<?php

namespace LanguageServerProtocol;

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
    public function __construct(?bool $applyEdit, ?WorkspaceEditClientCapabilities $workspaceEdit, ?DidChangeConfigurationClientCapabilities $didChangeConfiguration, ?DidChangeWatchedFilesClientCapabilities $didChangeWatchedFiles, ?WorkspaceSymbolClientCapabilities $symbol, ?ExecuteCommandClientCapabilities $executeCommand)
    {
        $this->applyEdit = $applyEdit;
        $this->workspaceEdit = $workspaceEdit;
        $this->didChangeConfiguration = $didChangeConfiguration;
        $this->didChangeWatchedFiles = $didChangeWatchedFiles;
        $this->symbol = $symbol;
        $this->executeCommand = $executeCommand;
    }
}