<?php

namespace LanguageServerProtocol;

/**
 * A workspace edit represents changes to many resources managed in the workspace. The edit
 * should either provide `changes` or `documentChanges`. If documentChanges are present
 * they are preferred over `changes` if the client can handle versioned document edits.
 */
class WorkspaceEdit
{
    /**
     * Holds changes to existing resources.
     *
     * @var array<mixed>|null
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
     * @var array<(TextDocumentEdit|CreateFile|RenameFile|DeleteFile)>|null
     */
    public $documentChanges;

    /**
     * @param array<mixed>|null $changes
     * @param array<(TextDocumentEdit|CreateFile|RenameFile|DeleteFile)>|null $documentChanges
     */
    public function __construct($changes, ?array $documentChanges = null)
    {
        $this->changes = $changes;
        $this->documentChanges = $documentChanges;
    }
}