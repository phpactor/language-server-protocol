<?php

namespace LanguageServerProtocol;

class WorkspaceEdit
{
    /**
     * Holds changes to existing resources.
     *
     * @var 
     */
    public $changes;

    /**
     * Depending on the client capability `workspace.workspaceEdit.resourceOperations` document changes
     * are either an array of `TextDocumentEdit`s to express changes to n different text documents
     * where each text document edit addresses a specific version of a text document. Or it can contain
     * above `TextDocumentEdit`s mixed with create, rename and delete file / folder operations.
     * 
     * Whether a client supports versioned document edits is expressed via
     * `workspace.workspaceEdit.documentChanges` client capability.
     * 
     * If a client neither supports `documentChanges` nor `workspace.workspaceEdit.resourceOperations` then
     * only plain `TextEdit`s using the `changes` property are supported.
     *
     * @var array<(TextDocumentEdit|CreateFile|RenameFile|DeleteFile)>
     */
    public $documentChanges;

    public function __construct(null $changes, array $documentChanges)
    {
        $this->$changes = $this->$changes;
        $this->$documentChanges = $this->$documentChanges;
    }
}