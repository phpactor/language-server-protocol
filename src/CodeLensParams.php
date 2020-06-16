<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams, PartialResultParams
 */
class CodeLensParams
{
    /**
     * The document to request code lens for.
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