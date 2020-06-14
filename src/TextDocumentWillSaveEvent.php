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

    /**
     * @param TextDocument $document
     * @param 1|2|3 $reason
     */
    public function __construct(TextDocument $document, $reason)
    {
        $this->document = $document;
        $this->reason = $reason;
    }
}