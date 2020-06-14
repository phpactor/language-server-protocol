<?php

namespace LanguageServerProtocol;

class TextDocumentRegistrationOptions
{
    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var DocumentSelector|null
     */
    public $documentSelector;

    public function __construct(object $documentSelector)
    {
        $this->$documentSelector = $this->$documentSelector;
    }
}