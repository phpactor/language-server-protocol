<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams
 */
class DocumentRangeFormattingParams
{
    /**
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

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
     * @param int|string|null $workDoneToken
     * @param TextDocumentIdentifier $textDocument
     * @param Range $range
     * @param FormattingOptions $options
     */
    public function __construct($workDoneToken, TextDocumentIdentifier $textDocument, Range $range, FormattingOptions $options)
    {
        $this->workDoneToken = $workDoneToken;
        $this->textDocument = $textDocument;
        $this->range = $range;
        $this->options = $options;
    }
}