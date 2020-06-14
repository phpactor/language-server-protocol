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

    /**
     * @param 0|1|2 $syncKind
     */
    public function __construct($syncKind)
    {
        $this->syncKind = $syncKind;
    }
}