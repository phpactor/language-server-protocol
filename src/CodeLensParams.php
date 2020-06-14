<?php

namespace LanguageServerProtocol;

class CodeLensParams
{
    /**
     * The document to request code lens for.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    public function __construct(TextDocumentIdentifier $textDocument)
    {
        $this->$textDocument = $this->$textDocument;
    }
}