<?php

namespace LanguageServerProtocol;

class TextDocumentChangeRegistrationOptions
{
    /**
     * How documents are synced to the server.
     *
     * @var 0|1|2
     */
    public $syncKind;

    public function __construct(null $syncKind)
    {
        $this->syncKind = $syncKind;
    }
}