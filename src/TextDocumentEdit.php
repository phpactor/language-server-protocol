<?php

namespace LanguageServerProtocol;

/**
 * Describes textual changes on a text document. A TextDocumentEdit describes all changes
 * on a document version Si and after they are applied move the document to version Si+1.
 * So the creator of a TextDocumentEdit doesn't need to sort the array of edits or do any
 * kind of ordering. However the edits must be non overlapping.
 */
class TextDocumentEdit
{
    /**
     * The text document to change.
     *
     * @var VersionedTextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The edits to be applied.
     *
     * @var array<TextEdit>
     */
    public $edits;

    /**
     * @param VersionedTextDocumentIdentifier $textDocument
     * @param array<TextEdit> $edits
     */
    public function __construct(array $edits, VersionedTextDocumentIdentifier $textDocument)
    {
        $this->textDocument = $textDocument;
        $this->edits = $edits;
    }
}