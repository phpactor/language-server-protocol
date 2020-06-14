<?php

namespace LanguageServerProtocol;

class DidChangeConfigurationClientCapabilities
{
    /**
     * Did change configuration notification supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    public function __construct(string $dynamicRegistration)
    {
        $this->$dynamicRegistration = $this->$dynamicRegistration;
    }
}