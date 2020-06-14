<?php

namespace LanguageServerProtocol;

class WorkspaceEditClientCapabilities
{
    /**
     * The client supports versioned document changes in `WorkspaceEdit`s
     *
     * @var string
     */
    public $documentChanges;

    /**
     * The resource operations the client supports. Clients should at least
     * support 'create', 'rename' and 'delete' files and folders.
     *
     * @var array<ResourceOperationKind>
     */
    public $resourceOperations;

    /**
     * The failure handling strategy of a client if applying the workspace edit
     * fails.
     *
     * @var FailureHandlingKind
     */
    public $failureHandling;

    public function __construct(string $documentChanges, array $resourceOperations, FailureHandlingKind $failureHandling)
    {
        $this->$documentChanges = $this->$documentChanges;
        $this->$resourceOperations = $this->$resourceOperations;
        $this->$failureHandling = $this->$failureHandling;
    }
}