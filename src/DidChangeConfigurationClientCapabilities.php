<?php

namespace LanguageServerProtocol;

class DidChangeConfigurationClientCapabilities
{
    /**
     * Did change configuration notification supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * @param bool|null $dynamicRegistration
     */
    public function __construct(?bool $dynamicRegistration)
    {
        $this->dynamicRegistration = $dynamicRegistration;
    }
}