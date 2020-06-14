<?php

namespace LanguageServerProtocol;

class ImplementationClientCapabilities
{
    /**
     * Whether implementation supports dynamic registration. If this is set to `true`
     * the client supports the new `ImplementationRegistrationOptions` return value
     * for the corresponding server capability as well.
     *
     * @var string|null
     */
    public $dynamicRegistration;

    /**
     * The client supports additional metadata in the form of definition links.
     * 
     * Since 3.14.0
     *
     * @var string|null
     */
    public $linkSupport;

    /**
     * @param string|null $dynamicRegistration
     * @param string|null $linkSupport
     */
    public function __construct(?string $dynamicRegistration, ?string $linkSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->linkSupport = $linkSupport;
    }
}