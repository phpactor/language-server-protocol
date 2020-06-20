<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams
 */
class RenameParams
{
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
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

    /**
     * @param TextDocumentIdentifier $textDocument
     * @param Position $position
     * @param string $newName
     * @param int|string|null $workDoneToken
     */
    public function __construct(TextDocumentIdentifier $textDocument, Position $position, string $newName, $workDoneToken)
    {
        $this->textDocument = $textDocument;
        $this->position = $position;
        $this->newName = $newName;
        $this->workDoneToken = $workDoneToken;
    }
}