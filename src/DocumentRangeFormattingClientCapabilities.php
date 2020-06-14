<?php

namespace LanguageServerProtocol;

class DocumentRangeFormattingClientCapabilities
{
    /**
     * Whether range formatting supports dynamic registration.
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