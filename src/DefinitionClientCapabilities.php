<?php

namespace LanguageServerProtocol;

class DefinitionClientCapabilities
{
    /**
     * Whether definition supports dynamic registration.
     *
     * @var string|null
     */
    public $dynamicRegistration;

    /**
     * The client supports additional metadata in the form of definition links.
     *
     * @var string|null
     */
    public $linkSupport;

    /**
     * @param string|null $dynamicRegistration
     * @param string|null $linkSupport
     */
    public function __construct(?string $dynamicRegistration, ?string $linkSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->linkSupport = $linkSupport;
    }
}