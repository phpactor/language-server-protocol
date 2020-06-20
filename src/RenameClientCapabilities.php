<?php

namespace LanguageServerProtocol;

class RenameClientCapabilities
{
    /**
     * Whether rename supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * Client supports testing for validity of rename operations
     * before execution.
     *
     * @var bool|null
     */
    public $prepareSupport;

    /**
     * @param bool|null $dynamicRegistration
     * @param bool|null $prepareSupport
     */
    public function __construct(?bool $dynamicRegistration = null, ?bool $prepareSupport = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->prepareSupport = $prepareSupport;
    }
}