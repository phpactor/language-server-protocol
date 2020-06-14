<?php

namespace LanguageServerProtocol;

class RenameFile
{
    /**
     * A rename
     *
     * @var 'rename'
     */
    public $kind;

    /**
     * The old (existing) location.
     *
     * @var DocumentUri
     */
    public $oldUri;

    /**
     * The new location.
     *
     * @var DocumentUri
     */
    public $newUri;

    /**
     * Rename options.
     *
     * @var RenameFileOptions
     */
    public $options;

    public function __construct(null $kind, DocumentUri $oldUri, DocumentUri $newUri, RenameFileOptions $options)
    {
        $this->$kind = $this->$kind;
        $this->$oldUri = $this->$oldUri;
        $this->$newUri = $this->$newUri;
        $this->$options = $this->$options;
    }
}