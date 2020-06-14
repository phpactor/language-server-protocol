<?php

namespace LanguageServerProtocol;

class ImplementationClientCapabilities
{
    /**
     * Whether implementation supports dynamic registration. If this is set to `true`
     * the client supports the new `ImplementationRegistrationOptions` return value
     * for the corresponding server capability as well.
     *
     * @var string
     */
    public $dynamicRegistration;

    /**
     * The client supports additional metadata in the form of definition links.
     * 
     * Since 3.14.0
     *
     * @var string
     */
    public $linkSupport;

    /**
     * @param string $dynamicRegistration
     * @param string $linkSupport
     */
    public function __construct(string $dynamicRegistration, string $linkSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->linkSupport = $linkSupport;
    }
}