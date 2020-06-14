<?php

namespace LanguageServerProtocol;

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

    public function __construct(TextDocumentIdentifier $textDocument, Position $position, string $newName)
    {
        $this->$textDocument = $this->$textDocument;
        $this->$position = $this->$position;
        $this->$newName = $this->$newName;
    }
}