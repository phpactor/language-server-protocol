<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams
 */
class DocumentRangeFormattingParams
{
    /**
     * The document to format.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The range to format
     *
     * @var Range
     */
    public $range;

    /**
     * The format options
     *
     * @var FormattingOptions
     */
    public $options;

    /**
     * @param TextDocumentIdentifier $textDocument
     * @param Range $range
     * @param FormattingOptions $options
     */
    public function __construct(TextDocumentIdentifier $textDocument, Range $range, FormattingOptions $options)
    {
        $this->textDocument = $textDocument;
        $this->range = $range;
        $this->options = $options;
    }
}