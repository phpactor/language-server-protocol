<?php

namespace LanguageServerProtocol;

class TextDocumentRegistrationOptions
{
    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|DocumentFilter)>|null
     */
    public $documentSelector;

    public function __construct(null $documentSelector)
    {
        $this->documentSelector = $documentSelector;
    }
}