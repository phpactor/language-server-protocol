<?php

namespace LanguageServerProtocol;

class DocumentFormattingParams
{
    /**
     * The document to format.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The format options
     *
     * @var FormattingOptions
     */
    public $options;

    public function __construct(TextDocumentIdentifier $textDocument, FormattingOptions $options)
    {
        $this->textDocument = $textDocument;
        $this->options = $options;
    }
}