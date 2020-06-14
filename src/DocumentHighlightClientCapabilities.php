<?php

namespace LanguageServerProtocol;

class DocumentHighlightClientCapabilities
{
    /**
     * Whether document highlight supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    public function __construct(string $dynamicRegistration)
    {
        $this->$dynamicRegistration = $this->$dynamicRegistration;
    }
}