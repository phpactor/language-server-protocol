<?php

namespace LanguageServerProtocol;

/**
 * The client capabilities of a [DocumentLinkRequest](#DocumentLinkRequest).
 */
class DocumentLinkClientCapabilities
{
    /**
     * Whether document link supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * Whether the client support the `tooltip` property on `DocumentLink`.
     *
     * @var bool|null
     */
    public $tooltipSupport;

    /**
     * @param bool|null $dynamicRegistration
     * @param bool|null $tooltipSupport
     */
    public function __construct(?bool $dynamicRegistration, ?bool $tooltipSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->tooltipSupport = $tooltipSupport;
    }
}