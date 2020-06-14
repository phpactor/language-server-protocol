<?php

namespace LanguageServerProtocol;

class RenameClientCapabilities
{
    /**
     * Whether rename supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    /**
     * Client supports testing for validity of rename operations
     * before execution.
     *
     * @var string
     */
    public $prepareSupport;

    public function __construct(string $dynamicRegistration, string $prepareSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->prepareSupport = $prepareSupport;
    }
}