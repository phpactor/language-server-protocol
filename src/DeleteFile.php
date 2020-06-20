<?php

namespace LanguageServerProtocol;

/**
 * Delete file operation
 *
 * Mixins (implemented TS interfaces): ResourceOperation
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
    public function __construct(string $uri, string $kind, ?DeleteFileOptions $options = null)
    {
        $this->kind = $kind;
        $this->uri = $uri;
        $this->options = $options;
    }
}