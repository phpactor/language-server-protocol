<?php

namespace LanguageServerProtocol;

class ExecuteCommandClientCapabilities
{
    /**
     * Execute command supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    public function __construct(string $dynamicRegistration)
    {
        $this->dynamicRegistration = $dynamicRegistration;
    }
}