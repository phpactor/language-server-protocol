<?php

namespace LanguageServerProtocol;

class SelectionRangeClientCapabilities
{
    /**
     * Whether implementation supports dynamic registration for selection range providers. If this is set to `true`
     * the client supports the new `SelectionRangeRegistrationOptions` return value for the corresponding server
     * capability as well.
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