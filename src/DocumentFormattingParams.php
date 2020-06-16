<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams
 */
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

    /**
     * @param TextDocumentIdentifier $textDocument
     * @param FormattingOptions $options
     */
    public function __construct(TextDocumentIdentifier $textDocument, FormattingOptions $options)
    {
        $this->textDocument = $textDocument;
        $this->options = $options;
    }
}