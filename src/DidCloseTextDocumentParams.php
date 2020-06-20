<?php

namespace LanguageServerProtocol;

/**
 * The parameters send in a close text document notification
 */
class DidCloseTextDocumentParams
{
    /**
     * The document that was closed.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * @param TextDocumentIdentifier $textDocument
     */
    public function __construct(TextDocumentIdentifier $textDocument)
    {
        $this->textDocument = $textDocument;
    }
}