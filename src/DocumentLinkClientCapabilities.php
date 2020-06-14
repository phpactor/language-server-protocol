<?php

namespace LanguageServerProtocol;

class DocumentLinkClientCapabilities
{
    /**
     * Whether document link supports dynamic registration.
     *
     * @var string|null
     */
    public $dynamicRegistration;

    /**
     * Whether the client support the `tooltip` property on `DocumentLink`.
     *
     * @var string|null
     */
    public $tooltipSupport;

    /**
     * @param string|null $dynamicRegistration
     * @param string|null $tooltipSupport
     */
    public function __construct(?string $dynamicRegistration, ?string $tooltipSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->tooltipSupport = $tooltipSupport;
    }
}