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
     * @var type literal ...
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
     * @var 
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

    public function __construct(null $processId, null $clientInfo, null $rootPath, null $rootUri, null $capabilities, null $initializationOptions, null $trace)
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