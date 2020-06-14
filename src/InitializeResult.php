<?php

namespace LanguageServerProtocol;

class InitializeResult
{
    /**
     * The capabilities the language server provides.
     *
     * @var ServerCapabilities
     */
    public $capabilities;

    /**
     * Information about the server.
     *
     * @var 
     */
    public $serverInfo;

    public function __construct(ServerCapabilities $capabilities, null $serverInfo)
    {
        $this->$capabilities = $this->$capabilities;
        $this->$serverInfo = $this->$serverInfo;
    }
}