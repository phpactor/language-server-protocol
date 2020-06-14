<?php

namespace LanguageServerProtocol;

class TextDocumentItem
{
    /**
     * The text document's uri.
     *
     * @var string
     */
    public $uri;

    /**
     * The text document's language identifier
     *
     * @var string
     */
    public $languageId;

    /**
     * The version number of this document (it will increase after each
     * change, including undo/redo).
     *
     * @var int
     */
    public $version;

    /**
     * The content of the opened text document.
     *
     * @var string
     */
    public $text;

    /**
     * @param string $uri
     * @param string $languageId
     * @param int $version
     * @param string $text
     */
    public function __construct(string $uri, string $languageId, int $version, string $text)
    {
        $this->uri = $uri;
        $this->languageId = $languageId;
        $this->version = $version;
        $this->text = $text;
    }
}