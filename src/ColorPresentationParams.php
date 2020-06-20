<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams, PartialResultParams
 */
class ColorPresentationParams
{
    /**
     * An optional token that a server can use to report partial results (e.g. streaming) to
     * the client.
     *
     * @var int|string|null
     */
    public $partialResultToken;

    /**
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

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
     * @param int|string|null $partialResultToken
     * @param int|string|null $workDoneToken
     * @param TextDocumentIdentifier $textDocument
     * @param Color $color
     * @param Range $range
     */
    public function __construct($partialResultToken, $workDoneToken, TextDocumentIdentifier $textDocument, Color $color, Range $range)
    {
        $this->partialResultToken = $partialResultToken;
        $this->workDoneToken = $workDoneToken;
        $this->textDocument = $textDocument;
        $this->color = $color;
        $this->range = $range;
    }
}