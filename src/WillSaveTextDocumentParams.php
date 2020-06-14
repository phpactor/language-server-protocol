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
     * @var 1|2|3
     */
    public $reason;

    public function __construct(TextDocumentIdentifier $textDocument, null $reason)
    {
        $this->textDocument = $textDocument;
        $this->reason = $reason;
    }
}