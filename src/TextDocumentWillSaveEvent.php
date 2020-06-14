<?php

namespace LanguageServerProtocol;

class TextDocumentWillSaveEvent
{
    /**
     * The document that will be saved
     *
     * @var TextDocument
     */
    public $document;

    /**
     * The reason why save was triggered.
     *
     * @var 1|2|3
     */
    public $reason;

    public function __construct(TextDocument $document, object $reason)
    {
        $this->$document = $this->$document;
        $this->$reason = $this->$reason;
    }
}