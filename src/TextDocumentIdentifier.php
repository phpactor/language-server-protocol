<?php

namespace LanguageServerProtocol;

class TextDocumentIdentifier
{
    /**
     * The text document's uri.
     *
     * @var DocumentUri
     */
    public $uri;

    public function __construct(DocumentUri $uri)
    {
        $this->$uri = $this->$uri;
    }
}