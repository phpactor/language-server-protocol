<?php

namespace LanguageServerProtocol;

/**
 * An event describing a file change.
 */
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

    /**
     * @param string $uri
     * @param 1|2|3 $type
     */
    public function __construct($type, string $uri)
    {
        $this->uri = $uri;
        $this->type = $type;
    }
}