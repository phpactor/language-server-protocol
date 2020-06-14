<?php

namespace LanguageServerProtocol;

class TextDocumentItem
{
    /**
     * The text document's uri.
     *
     * @var DocumentUri
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

    public function __construct(DocumentUri $uri, string $languageId, int $version, string $text)
    {
        $this->$uri = $this->$uri;
        $this->$languageId = $this->$languageId;
        $this->$version = $this->$version;
        $this->$text = $this->$text;
    }
}