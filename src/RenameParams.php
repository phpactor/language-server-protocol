<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams
 */
class RenameParams
{
    /**
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

    /**
     * The document to rename.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The position at which this request was sent.
     *
     * @var Position
     */
    public $position;

    /**
     * The new name of the symbol. If the given name is not valid the
     * request must return a [ResponseError](#ResponseError) with an
     * appropriate message set.
     *
     * @var string
     */
    public $newName;

    /**
     * @param int|string|null $workDoneToken
     * @param TextDocumentIdentifier $textDocument
     * @param Position $position
     * @param string $newName
     */
    public function __construct($workDoneToken, TextDocumentIdentifier $textDocument, Position $position, string $newName)
    {
        $this->workDoneToken = $workDoneToken;
        $this->textDocument = $textDocument;
        $this->position = $position;
        $this->newName = $newName;
    }
}