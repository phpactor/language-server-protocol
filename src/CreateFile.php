<?php

namespace LanguageServerProtocol;

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
     * @var DocumentUri
     */
    public $uri;

    /**
     * Additional options
     *
     * @var CreateFileOptions
     */
    public $options;

    public function __construct(null $kind, DocumentUri $uri, CreateFileOptions $options)
    {
        $this->$kind = $this->$kind;
        $this->$uri = $this->$uri;
        $this->$options = $this->$options;
    }
}