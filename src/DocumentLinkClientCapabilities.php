<?php

namespace LanguageServerProtocol;

class DocumentLinkClientCapabilities
{
    /**
     * Whether document link supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    /**
     * Whether the client support the `tooltip` property on `DocumentLink`.
     *
     * @var string
     */
    public $tooltipSupport;

    public function __construct(string $dynamicRegistration, string $tooltipSupport)
    {
        $this->$dynamicRegistration = $this->$dynamicRegistration;
        $this->$tooltipSupport = $this->$tooltipSupport;
    }
}