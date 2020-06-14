<?php

namespace LanguageServerProtocol;

class DidCloseTextDocumentParams
{
    /**
     * The document that was closed.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    public function __construct(TextDocumentIdentifier $textDocument)
    {
        $this->textDocument = $textDocument;
    }
}