<?php

namespace LanguageServerProtocol;

class WillSaveTextDocumentParams
{
    /**
     * The document that will be saved.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The 'TextDocumentSaveReason'.
     *
     * @var TextDocumentSaveReason
     */
    public $reason;

    public function __construct(TextDocumentIdentifier $textDocument, TextDocumentSaveReason $reason)
    {
        $this->$textDocument = $this->$textDocument;
        $this->$reason = $this->$reason;
    }
}