<?php

namespace LanguageServerProtocol;

class TextDocumentPositionParams
{
    /**
     * The text document.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The position inside the text document.
     *
     * @var Position
     */
    public $position;

    public function __construct(TextDocumentIdentifier $textDocument, Position $position)
    {
        $this->$textDocument = $this->$textDocument;
        $this->$position = $this->$position;
    }
}