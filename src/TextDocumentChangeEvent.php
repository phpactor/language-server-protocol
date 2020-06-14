<?php

namespace LanguageServerProtocol;

class TextDocumentChangeEvent
{
    /**
     * The document that has changed.
     *
     * @var TextDocument
     */
    public $document;

    public function __construct(TextDocument $document)
    {
        $this->$document = $this->$document;
    }
}