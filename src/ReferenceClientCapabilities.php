<?php

namespace LanguageServerProtocol;

class ReferenceClientCapabilities
{
    /**
     * Whether references supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    public function __construct(string $dynamicRegistration)
    {
        $this->$dynamicRegistration = $this->$dynamicRegistration;
    }
}