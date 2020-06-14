<?php

namespace LanguageServerProtocol;

class DeleteFileOptions
{
    /**
     * Delete the content recursively if a folder is denoted.
     *
     * @var string
     */
    public $recursive;

    /**
     * Ignore the operation if the file doesn't exist.
     *
     * @var string
     */
    public $ignoreIfNotExists;

    public function __construct(string $recursive, string $ignoreIfNotExists)
    {
        $this->recursive = $recursive;
        $this->ignoreIfNotExists = $ignoreIfNotExists;
    }
}