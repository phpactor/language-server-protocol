<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams, PartialResultParams
 */
class SelectionRangeParams
{
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
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

    /**
     * An optional token that a server can use to report partial results (e.g. streaming) to
     * the client.
     *
     * @var int|string|null
     */
    public $partialResultToken;

    /**
     * @param TextDocumentIdentifier $textDocument
     * @param array<Position> $positions
     * @param int|string|null $workDoneToken
     * @param int|string|null $partialResultToken
     */
    public function __construct(TextDocumentIdentifier $textDocument, array $positions, $workDoneToken, $partialResultToken)
    {
        $this->textDocument = $textDocument;
        $this->positions = $positions;
        $this->workDoneToken = $workDoneToken;
        $this->partialResultToken = $partialResultToken;
    }
}