<?php

namespace LanguageServerProtocol;

class TextDocument
{
    /**
     * The associated URI for this document. Most documents have the __file__-scheme, indicating that they
     * represent files on disk. However, some documents may have other schemes indicating that they are not
     * available on disk.
     *
     * @var string
     */
    public $uri;

    /**
     * The identifier of the language associated with this document.
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
     * The number of lines in this document.
     *
     * @var int
     */
    public $lineCount;

    /**
     * @param string $uri
     * @param string $languageId
     * @param int $version
     * @param int $lineCount
     */
    public function __construct(string $uri, string $languageId, int $version, int $lineCount)
    {
        $this->uri = $uri;
        $this->languageId = $languageId;
        $this->version = $version;
        $this->lineCount = $lineCount;
    }
}