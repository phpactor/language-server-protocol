<?php

namespace LanguageServerProtocol;

class DeleteFile
{
    /**
     * A delete
     *
     * @var 'delete'
     */
    public $kind;

    /**
     * The file to delete.
     *
     * @var string
     */
    public $uri;

    /**
     * Delete options.
     *
     * @var DeleteFileOptions
     */
    public $options;

    public function __construct(null $kind, string $uri, DeleteFileOptions $options)
    {
        $this->kind = $kind;
        $this->uri = $uri;
        $this->options = $options;
    }
}