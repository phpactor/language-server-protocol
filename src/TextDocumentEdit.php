<?php

namespace LanguageServerProtocol;

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
    public function __construct(VersionedTextDocumentIdentifier $textDocument, array $edits)
    {
        $this->textDocument = $textDocument;
        $this->edits = $edits;
    }
}