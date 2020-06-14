<?php

namespace LanguageServerProtocol;

class InitializeResult
{
    /**
     * The capabilities the language server provides.
     *
     * @var _ServerCapabilities&WorkspaceFoldersServerCapabilities
     */
    public $capabilities;

    /**
     * Information about the server.
     *
     * @var array<mixed>|null
     */
    public $serverInfo;

    /**
     * @param _ServerCapabilities&WorkspaceFoldersServerCapabilities $capabilities
     * @param array<mixed>|null $serverInfo
     */
    public function __construct($capabilities, $serverInfo)
    {
        $this->capabilities = $capabilities;
        $this->serverInfo = $serverInfo;
    }
}