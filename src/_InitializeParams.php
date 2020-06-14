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
     * @var 
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
     * @var DocumentUri|null
     */
    public $rootUri;

    /**
     * The capabilities provided by the client (editor or tool)
     *
     * @var ClientCapabilities
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

    public function __construct(object $processId, null $clientInfo, object $rootPath, object $rootUri, ClientCapabilities $capabilities, null $initializationOptions, object $trace)
    {
        $this->$processId = $this->$processId;
        $this->$clientInfo = $this->$clientInfo;
        $this->$rootPath = $this->$rootPath;
        $this->$rootUri = $this->$rootUri;
        $this->$capabilities = $this->$capabilities;
        $this->$initializationOptions = $this->$initializationOptions;
        $this->$trace = $this->$trace;
    }
}