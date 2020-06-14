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

    /**
     * @param string $dynamicRegistration
     */
    public function __construct(string $dynamicRegistration)
    {
        $this->dynamicRegistration = $dynamicRegistration;
    }
}