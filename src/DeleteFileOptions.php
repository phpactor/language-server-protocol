<?php

namespace LanguageServerProtocol;

class DeleteFileOptions
{
    /**
     * Delete the content recursively if a folder is denoted.
     *
     * @var bool|null
     */
    public $recursive;

    /**
     * Ignore the operation if the file doesn't exist.
     *
     * @var bool|null
     */
    public $ignoreIfNotExists;

    /**
     * @param bool|null $recursive
     * @param bool|null $ignoreIfNotExists
     */
    public function __construct(?bool $recursive, ?bool $ignoreIfNotExists)
    {
        $this->recursive = $recursive;
        $this->ignoreIfNotExists = $ignoreIfNotExists;
    }
}