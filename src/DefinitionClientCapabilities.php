<?php

namespace LanguageServerProtocol;

class DefinitionClientCapabilities
{
    /**
     * Whether definition supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * The client supports additional metadata in the form of definition links.
     *
     * @var bool|null
     */
    public $linkSupport;

    /**
     * @param bool|null $dynamicRegistration
     * @param bool|null $linkSupport
     */
    public function __construct(?bool $dynamicRegistration, ?bool $linkSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->linkSupport = $linkSupport;
    }
}