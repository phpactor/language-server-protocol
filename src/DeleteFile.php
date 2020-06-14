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
     * @var DocumentUri
     */
    public $uri;

    /**
     * Delete options.
     *
     * @var DeleteFileOptions
     */
    public $options;

    public function __construct(null $kind, DocumentUri $uri, DeleteFileOptions $options)
    {
        $this->kind = $kind;
        $this->uri = $uri;
        $this->options = $options;
    }
}