<?php

namespace LanguageServerProtocol;

class DocumentLinkParams
{
    /**
     * The document to provide document links for.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    public function __construct(TextDocumentIdentifier $textDocument)
    {
        $this->textDocument = $textDocument;
    }
}