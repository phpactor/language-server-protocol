<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams
 */
class DocumentFormattingParams
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
     * The format options
     *
     * @var FormattingOptions
     */
    public $options;

    /**
     * @param int|string|null $workDoneToken
     * @param TextDocumentIdentifier $textDocument
     * @param FormattingOptions $options
     */
    public function __construct($workDoneToken, TextDocumentIdentifier $textDocument, FormattingOptions $options)
    {
        $this->workDoneToken = $workDoneToken;
        $this->textDocument = $textDocument;
        $this->options = $options;
    }
}