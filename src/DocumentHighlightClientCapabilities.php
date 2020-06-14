<?php

namespace LanguageServerProtocol;

class DocumentHighlightClientCapabilities
{
    /**
     * Whether document highlight supports dynamic registration.
     *
     * @var string|null
     */
    public $dynamicRegistration;

    /**
     * @param string|null $dynamicRegistration
     */
    public function __construct(?string $dynamicRegistration)
    {
        $this->dynamicRegistration = $dynamicRegistration;
    }
}