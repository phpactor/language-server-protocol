<?php

namespace LanguageServerProtocol;

/**
 * implements ResourceOperation
 */
class CreateFile
{
    /**
     * A create
     *
     * @var 'create'
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
     * @param 'create' $kind
     * @param string $uri
     * @param CreateFileOptions|null $options
     */
    public function __construct($kind, string $uri, ?CreateFileOptions $options)
    {
        $this->kind = $kind;
        $this->uri = $uri;
        $this->options = $options;
    }
}