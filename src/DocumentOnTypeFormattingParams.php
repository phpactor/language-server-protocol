<?php

namespace LanguageServerProtocol;

class DocumentOnTypeFormattingParams
{
    /**
     * The document to format.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The position at which this request was send.
     *
     * @var Position
     */
    public $position;

    /**
     * The character that has been typed.
     *
     * @var string
     */
    public $ch;

    /**
     * The format options.
     *
     * @var FormattingOptions
     */
    public $options;

    public function __construct(TextDocumentIdentifier $textDocument, Position $position, string $ch, FormattingOptions $options)
    {
        $this->$textDocument = $this->$textDocument;
        $this->$position = $this->$position;
        $this->$ch = $this->$ch;
        $this->$options = $this->$options;
    }
}