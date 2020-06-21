<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * Mixins (implemented TS interfaces): _InitializeParams, WorkspaceFoldersInitializeParams
 */
class InitializeParams
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
     * @var array<mixed>|null
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
     * @var ClientCapabilities
     */
    public $capabilities;

    /**
     * User provided initialization options.
     *
     * @var mixed|null
     */
    public $initializationOptions;

    /**
     * The initial trace setting. If omitted trace is disabled ('off').
     *
     * @var 'off'|'messages'|'verbose'|null
     */
    public $trace;

    /**
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

    /**
     * The actual configured workspace folders.
     *
     * @var array<WorkspaceFolder>|null
     */
    public $workspaceFolders;

    /**
     * @param int|null $processId
     * @param array<mixed>|null $clientInfo
     * @param string|null $rootPath
     * @param string|null $rootUri
     * @param ClientCapabilities $capabilities
     * @param mixed|null $initializationOptions
     * @param 'off'|'messages'|'verbose'|null $trace
     * @param int|string|null $workDoneToken
     * @param array<WorkspaceFolder>|null $workspaceFolders
     */
    public function __construct(ClientCapabilities $capabilities, $processId = null, ?array $clientInfo = null, $rootPath = null, $rootUri = null, $initializationOptions = null, $trace = null, $workDoneToken = null, $workspaceFolders = null)
    {
        $this->processId = $processId;
        $this->clientInfo = $clientInfo;
        $this->rootPath = $rootPath;
        $this->rootUri = $rootUri;
        $this->capabilities = $capabilities;
        $this->initializationOptions = $initializationOptions;
        $this->trace = $trace;
        $this->workDoneToken = $workDoneToken;
        $this->workspaceFolders = $workspaceFolders;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}