<?php

namespace LanguageServerProtocol;

class DidChangeWatchedFilesClientCapabilities
{
    /**
     * Did change watched files notification supports dynamic registration. Please note
     * that the current protocol doesn't support static configuration for file changes
     * from the server side.
     *
     * @var string
     */
    public $dynamicRegistration;

    public function __construct(string $dynamicRegistration)
    {
        $this->$dynamicRegistration = $this->$dynamicRegistration;
    }
}