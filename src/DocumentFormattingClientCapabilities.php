<?php

namespace LanguageServerProtocol;

class DocumentFormattingClientCapabilities
{
    /**
     * Whether formatting supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    public function __construct(string $dynamicRegistration)
    {
        $this->$dynamicRegistration = $this->$dynamicRegistration;
    }
}