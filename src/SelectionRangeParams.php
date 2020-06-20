<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams, PartialResultParams
 */
class SelectionRangeParams
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
     * The positions inside the text document.
     *
     * @var array<Position>
     */
    public $positions;

    /**
     * @param int|string|null $partialResultToken
     * @param int|string|null $workDoneToken
     * @param TextDocumentIdentifier $textDocument
     * @param array<Position> $positions
     */
    public function __construct($partialResultToken, $workDoneToken, TextDocumentIdentifier $textDocument, array $positions)
    {
        $this->partialResultToken = $partialResultToken;
        $this->workDoneToken = $workDoneToken;
        $this->textDocument = $textDocument;
        $this->positions = $positions;
    }
}