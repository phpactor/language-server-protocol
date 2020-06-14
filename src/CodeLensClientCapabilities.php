<?php

namespace LanguageServerProtocol;

class CodeLensClientCapabilities
{
    /**
     * Whether code lens supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    public function __construct(string $dynamicRegistration)
    {
        $this->dynamicRegistration = $dynamicRegistration;
    }
}