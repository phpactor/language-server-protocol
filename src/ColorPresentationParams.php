<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams, PartialResultParams
 */
class ColorPresentationParams
{
    /**
     * The text document.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The color to request presentations for.
     *
     * @var Color
     */
    public $color;

    /**
     * The range where the color would be inserted. Serves as a context.
     *
     * @var Range
     */
    public $range;

    /**
     * @param TextDocumentIdentifier $textDocument
     * @param Color $color
     * @param Range $range
     */
    public function __construct(TextDocumentIdentifier $textDocument, Color $color, Range $range)
    {
        $this->textDocument = $textDocument;
        $this->color = $color;
        $this->range = $range;
    }
}