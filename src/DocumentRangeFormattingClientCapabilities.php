<?php

namespace LanguageServerProtocol;

class DocumentRangeFormattingClientCapabilities
{
    /**
     * Whether range formatting supports dynamic registration.
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