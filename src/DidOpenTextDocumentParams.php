<?php

namespace LanguageServerProtocol;

class DidOpenTextDocumentParams
{
    /**
     * The document that was opened.
     *
     * @var TextDocumentItem
     */
    public $textDocument;

    public function __construct(TextDocumentItem $textDocument)
    {
        $this->textDocument = $textDocument;
    }
}