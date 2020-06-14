<?php

namespace LanguageServerProtocol;

class FileEvent
{
    /**
     * The file's uri.
     *
     * @var DocumentUri
     */
    public $uri;

    /**
     * The change type.
     *
     * @var FileChangeType
     */
    public $type;

    public function __construct(DocumentUri $uri, FileChangeType $type)
    {
        $this->$uri = $this->$uri;
        $this->$type = $this->$type;
    }
}