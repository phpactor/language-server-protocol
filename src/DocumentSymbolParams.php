<?php

namespace LanguageServerProtocol;

class DocumentSymbolParams
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