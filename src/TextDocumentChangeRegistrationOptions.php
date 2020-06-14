<?php

namespace LanguageServerProtocol;

class TextDocumentChangeRegistrationOptions
{
    /**
     * How documents are synced to the server.
     *
     * @var TextDocumentSyncKind
     */
    public $syncKind;

    public function __construct(TextDocumentSyncKind $syncKind)
    {
        $this->$syncKind = $this->$syncKind;
    }
}