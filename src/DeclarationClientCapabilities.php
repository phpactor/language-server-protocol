<?php

namespace LanguageServerProtocol;

class DeclarationClientCapabilities
{
    /**
     * Whether declaration supports dynamic registration. If this is set to `true`
     * the client supports the new `DeclarationRegistrationOptions` return value
     * for the corresponding server capability as well.
     *
     * @var string|null
     */
    public $dynamicRegistration;

    /**
     * The client supports additional metadata in the form of declaration links.
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