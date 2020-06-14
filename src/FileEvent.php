<?php

namespace LanguageServerProtocol;

class FileEvent
{
    /**
     * The file's uri.
     *
     * @var string
     */
    public $uri;

    /**
     * The change type.
     *
     * @var 1|2|3
     */
    public $type;

    public function __construct(string $uri, null $type)
    {
        $this->uri = $uri;
        $this->type = $type;
    }
}