<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentPositionParams, WorkDoneProgressParams
 */
class PrepareRenameParams
{
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
     * The position inside the text document.
     *
     * @var Position
     */
    public $position;

    /**
     * @param int|string|null $workDoneToken
     * @param TextDocumentIdentifier $textDocument
     * @param Position $position
     */
    public function __construct($workDoneToken, TextDocumentIdentifier $textDocument, Position $position)
    {
        $this->workDoneToken = $workDoneToken;
        $this->textDocument = $textDocument;
        $this->position = $position;
    }
}