<?php

namespace LanguageServerProtocol;

class InitializeResult
{
    /**
     * The capabilities the language server provides.
     *
     * @var 
     */
    public $capabilities;

    /**
     * Information about the server.
     *
     * @var type literal ...
     */
    public $serverInfo;

    public function __construct(null $capabilities, null $serverInfo)
    {
        $this->capabilities = $capabilities;
        $this->serverInfo = $serverInfo;
    }
}