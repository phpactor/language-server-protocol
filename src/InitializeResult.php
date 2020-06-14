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
     * @var type literal ...
     */
    public $serverInfo;

    public function __construct(ServerCapabilities $capabilities, null $serverInfo)
    {
        $this->capabilities = $capabilities;
        $this->serverInfo = $serverInfo;
    }
}