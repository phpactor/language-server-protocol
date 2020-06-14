<?php

namespace LanguageServerProtocol;

class TextDocumentIdentifier
{
    /**
     * The text document's uri.
     *
     * @var string
     */
    public $uri;

    public function __construct(string $uri)
    {
        $this->uri = $uri;
    }
}