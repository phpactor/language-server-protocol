<?php

namespace LanguageServerProtocol;

/**
 * A literal to identify a text document in the client.
 */
class TextDocumentIdentifier
{
    /**
     * The text document's uri.
     *
     * @var string
     */
    public $uri;

    /**
     * @param string $uri
     */
    public function __construct(string $uri)
    {
        $this->uri = $uri;
    }
}