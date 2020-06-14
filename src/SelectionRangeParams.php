<?php

namespace LanguageServerProtocol;

class SelectionRangeParams
{
    /**
     * The text document.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The positions inside the text document.
     *
     * @var array<Position>
     */
    public $positions;

    /**
     * @param TextDocumentIdentifier $textDocument
     * @param array<Position> $positions
     */
    public function __construct(TextDocumentIdentifier $textDocument, array $positions)
    {
        $this->textDocument = $textDocument;
        $this->positions = $positions;
    }
}