<?php

namespace LanguageServerProtocol;

class _InitializeParams
{
    /**
     * The process Id of the parent process that started
     * the server.
     *
     * @var int|null
     */
    public $processId;

    /**
     * Information about the client
     *
     * @var array<mixed>
     */
    public $clientInfo;

    /**
     * The rootPath of the workspace. Is null
     * if no folder is open.
     *
     * @var string|null
     */
    public $rootPath;

    /**
     * The rootUri of the workspace. Is null if no
     * folder is open. If both `rootPath` and `rootUri` are set
     * `rootUri` wins.
     *
     * @var string|null
     */
    public $rootUri;

    /**
     * The capabilities provided by the client (editor or tool)
     *
     * @var _ClientCapabilities&WorkspaceFoldersClientCapabilities&ConfigurationClientCapabilities&WorkDoneProgressClientCapabilities
     */
    public $capabilities;

    /**
     * User provided initialization options.
     *
     * @var mixed
     */
    public $initializationOptions;

    /**
     * The initial trace setting. If omitted trace is disabled ('off').
     *
     * @var 'off'|'messages'|'verbose'
     */
    public $trace;

    /**
     * @param int|null $processId
     * @param array<mixed> $clientInfo
     * @param string|null $rootPath
     * @param string|null $rootUri
     * @param _ClientCapabilities&WorkspaceFoldersClientCapabilities&ConfigurationClientCapabilities&WorkDoneProgressClientCapabilities $capabilities
     * @param mixed $initializationOptions
     * @param 'off'|'messages'|'verbose' $trace
     */
    public function __construct($processId, $clientInfo, $rootPath, $rootUri, $capabilities, $initializationOptions, $trace)
    {
        $this->processId = $processId;
        $this->clientInfo = $clientInfo;
        $this->rootPath = $rootPath;
        $this->rootUri = $rootUri;
        $this->capabilities = $capabilities;
        $this->initializationOptions = $initializationOptions;
        $this->trace = $trace;
    }
}