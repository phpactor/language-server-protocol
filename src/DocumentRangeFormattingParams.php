<?php

namespace LanguageServerProtocol;

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

    public function __construct(TextDocumentIdentifier $textDocument, Range $range, FormattingOptions $options)
    {
        $this->$textDocument = $this->$textDocument;
        $this->$range = $this->$range;
        $this->$options = $this->$options;
    }
}