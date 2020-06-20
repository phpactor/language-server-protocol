<?php

namespace LanguageServerProtocol;

class CodeLensClientCapabilities
{
    /**
     * Whether code lens supports dynamic registration.
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