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
     * @var array<mixed>|null
     */
    public $serverInfo;

    /**
     * @param ServerCapabilities $capabilities
     * @param array<mixed>|null $serverInfo
     */
    public function __construct(ServerCapabilities $capabilities, $serverInfo)
    {
        $this->capabilities = $capabilities;
        $this->serverInfo = $serverInfo;
    }
}