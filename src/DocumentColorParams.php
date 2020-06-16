<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams, PartialResultParams
 */
class DocumentColorParams
{
    /**
     * The text document.
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