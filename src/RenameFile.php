<?php

namespace LanguageServerProtocol;

/**
 * Rename file operation
 *
 * Mixins (implemented TS interfaces): ResourceOperation
 */
class RenameFile
{
    /**
     *
     * @var string
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
     * @param string $kind
     * @param string $oldUri
     * @param string $newUri
     * @param RenameFileOptions|null $options
     */
    public function __construct(string $kind, string $oldUri, string $newUri, ?RenameFileOptions $options = null)
    {
        $this->kind = $kind;
        $this->oldUri = $oldUri;
        $this->newUri = $newUri;
        $this->options = $options;
    }
}