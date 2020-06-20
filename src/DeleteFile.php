<?php

namespace LanguageServerProtocol;

/**
 * implements ResourceOperation
 */
class DeleteFile
{
    /**
     *
     * @var string
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
     * @var DeleteFileOptions|null
     */
    public $options;

    /**
     * @param string $kind
     * @param string $uri
     * @param DeleteFileOptions|null $options
     */
    public function __construct(string $kind, string $uri, ?DeleteFileOptions $options)
    {
        $this->kind = $kind;
        $this->uri = $uri;
        $this->options = $options;
    }
}