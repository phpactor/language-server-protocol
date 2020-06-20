<?php

namespace LanguageServerProtocol;

/**
 * The parameters of a [DocumentOnTypeFormattingRequest](#DocumentOnTypeFormattingRequest).
 */
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

    /**
     * @param TextDocumentIdentifier $textDocument
     * @param Position $position
     * @param string $ch
     * @param FormattingOptions $options
     */
    public function __construct(TextDocumentIdentifier $textDocument, Position $position, string $ch, FormattingOptions $options)
    {
        $this->textDocument = $textDocument;
        $this->position = $position;
        $this->ch = $ch;
        $this->options = $options;
    }
}