<?php

namespace LanguageServerProtocol;

class WorkspaceClientCapabilities
{
    /**
     * The client supports applying batch edits
     * to the workspace by supporting the request
     * 'workspace/applyEdit'
     *
     * @var string
     */
    public $applyEdit;

    /**
     * Capabilities specific to `WorkspaceEdit`s
     *
     * @var WorkspaceEditClientCapabilities
     */
    public $workspaceEdit;

    /**
     * Capabilities specific to the `workspace/didChangeConfiguration` notification.
     *
     * @var DidChangeConfigurationClientCapabilities
     */
    public $didChangeConfiguration;

    /**
     * Capabilities specific to the `workspace/didChangeWatchedFiles` notification.
     *
     * @var DidChangeWatchedFilesClientCapabilities
     */
    public $didChangeWatchedFiles;

    /**
     * Capabilities specific to the `workspace/symbol` request.
     *
     * @var WorkspaceSymbolClientCapabilities
     */
    public $symbol;

    /**
     * Capabilities specific to the `workspace/executeCommand` request.
     *
     * @var ExecuteCommandClientCapabilities
     */
    public $executeCommand;

    public function __construct(string $applyEdit, WorkspaceEditClientCapabilities $workspaceEdit, DidChangeConfigurationClientCapabilities $didChangeConfiguration, DidChangeWatchedFilesClientCapabilities $didChangeWatchedFiles, WorkspaceSymbolClientCapabilities $symbol, ExecuteCommandClientCapabilities $executeCommand)
    {
        $this->applyEdit = $applyEdit;
        $this->workspaceEdit = $workspaceEdit;
        $this->didChangeConfiguration = $didChangeConfiguration;
        $this->didChangeWatchedFiles = $didChangeWatchedFiles;
        $this->symbol = $symbol;
        $this->executeCommand = $executeCommand;
    }
}