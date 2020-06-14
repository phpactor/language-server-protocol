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
     * @var array<'create'|'rename'|'delete'>
     */
    public $resourceOperations;

    /**
     * The failure handling strategy of a client if applying the workspace edit
     * fails.
     *
     * @var 'abort'|'transactional'|'undo'|'textOnlyTransactional'
     */
    public $failureHandling;

    public function __construct(string $documentChanges, array $resourceOperations, null $failureHandling)
    {
        $this->documentChanges = $documentChanges;
        $this->resourceOperations = $resourceOperations;
        $this->failureHandling = $failureHandling;
    }
}