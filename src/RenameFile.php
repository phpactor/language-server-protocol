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
     * @var string
     */
    public $oldUri;

    /**
     * The new location.
     *
     * @var string
     */
    public $newUri;

    /**
     * Rename options.
     *
     * @var RenameFileOptions|null
     */
    public $options;

    /**
     * @param 'rename' $kind
     * @param string $oldUri
     * @param string $newUri
     * @param RenameFileOptions|null $options
     */
    public function __construct($kind, string $oldUri, string $newUri, ?RenameFileOptions $options)
    {
        $this->kind = $kind;
        $this->oldUri = $oldUri;
        $this->newUri = $newUri;
        $this->options = $options;
    }
}