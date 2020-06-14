<?php

namespace LanguageServerProtocol;

class FoldingRangeParams
{
    /**
     * The text document.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    public function __construct(TextDocumentIdentifier $textDocument)
    {
        $this->$textDocument = $this->$textDocument;
    }
}