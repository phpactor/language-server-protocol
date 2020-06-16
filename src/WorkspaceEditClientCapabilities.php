<?php

namespace LanguageServerProtocol;

class WorkspaceEditClientCapabilities
{
    /**
     * The client supports versioned document changes in `WorkspaceEdit`s
     *
     * @var string|null
     */
    public $documentChanges;

    /**
     * The resource operations the client supports. Clients should at least
     * support 'create', 'rename' and 'delete' files and folders.
     *
     * @var array<'create'|'rename'|'delete'>|null
     */
    public $resourceOperations;

    /**
     * The failure handling strategy of a client if applying the workspace edit
     * fails.
     *
     * @var 'abort'|'transactional'|'undo'|'textOnlyTransactional'|null
     */
    public $failureHandling;

    /**
     * @param string|null $documentChanges
     * @param array<'create'|'rename'|'delete'>|null $resourceOperations
     * @param 'abort'|'transactional'|'undo'|'textOnlyTransactional'|null $failureHandling
     */
    public function __construct(?string $documentChanges, ?array $resourceOperations, $failureHandling)
    {
        $this->documentChanges = $documentChanges;
        $this->resourceOperations = $resourceOperations;
        $this->failureHandling = $failureHandling;
    }
}