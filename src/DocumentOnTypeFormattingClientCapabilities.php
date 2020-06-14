<?php

namespace LanguageServerProtocol;

class DocumentOnTypeFormattingClientCapabilities
{
    /**
     * Whether on type formatting supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    public function __construct(string $dynamicRegistration)
    {
        $this->$dynamicRegistration = $this->$dynamicRegistration;
    }
}