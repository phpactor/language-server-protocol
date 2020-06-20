<?php

namespace LanguageServerProtocol;

/**
 * The client capabilities of a [ExecuteCommandRequest](#ExecuteCommandRequest).
 */
class ExecuteCommandClientCapabilities
{
    /**
     * Execute command supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * @param bool|null $dynamicRegistration
     */
    public function __construct(?bool $dynamicRegistration = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
    }
}