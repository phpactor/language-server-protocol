<?php

namespace LanguageServerProtocol;

/**
 * undefined
 */
class TextDocumentChangeEvent
{
    /**
     * The document that has changed.
     *
     * @var TextDocument
     */
    public $document;

    /**
     * @param TextDocument $document
     */
    public function __construct(TextDocument $document)
    {
        $this->document = $document;
    }
}