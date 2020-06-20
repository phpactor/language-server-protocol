<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentRegistrationOptions
 */
class TextDocumentChangeRegistrationOptions
{
    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     * How documents are synced to the server.
     *
     * @var 0|1|2
     */
    public $syncKind;

    /**
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     * @param 0|1|2 $syncKind
     */
    public function __construct($documentSelector, $syncKind)
    {
        $this->documentSelector = $documentSelector;
        $this->syncKind = $syncKind;
    }
}