<?php

namespace LanguageServerProtocol;

/**
 * Create file operation.
 *
 * Mixins (implemented TS interfaces): ResourceOperation
 */
class CreateFile
{
    /**
     *
     * @var string
     */
    public $kind;

    /**
     * The resource to create.
     *
     * @var string
     */
    public $uri;

    /**
     * Additional options
     *
     * @var CreateFileOptions|null
     */
    public $options;

    /**
     * @param string $kind
     * @param string $uri
     * @param CreateFileOptions|null $options
     */
    public function __construct(string $kind, string $uri, ?CreateFileOptions $options = null)
    {
        $this->kind = $kind;
        $this->uri = $uri;
        $this->options = $options;
    }
}