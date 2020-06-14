<?php

namespace LanguageServerProtocol;

class DocumentColorClientCapabilities
{
    /**
     * Whether implementation supports dynamic registration. If this is set to `true`
     * the client supports the new `DocumentColorRegistrationOptions` return value
     * for the corresponding server capability as well.
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