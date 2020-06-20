<?php

namespace LanguageServerProtocol;

class DocumentRangeFormattingClientCapabilities
{
    /**
     * Whether range formatting supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * @param bool|null $dynamicRegistration
     */
    public function __construct(?bool $dynamicRegistration)
    {
        $this->dynamicRegistration = $dynamicRegistration;
    }
}