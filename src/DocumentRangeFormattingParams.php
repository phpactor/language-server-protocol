<?php

namespace LanguageServerProtocol;

/**
 * The parameters of a [DocumentRangeFormattingRequest](#DocumentRangeFormattingRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams
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
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

    /**
     * @param TextDocumentIdentifier $textDocument
     * @param Range $range
     * @param FormattingOptions $options
     * @param int|string|null $workDoneToken
     */
    public function __construct(FormattingOptions $options, Range $range, TextDocumentIdentifier $textDocument, $workDoneToken)
    {
        $this->textDocument = $textDocument;
        $this->range = $range;
        $this->options = $options;
        $this->workDoneToken = $workDoneToken;
    }
}