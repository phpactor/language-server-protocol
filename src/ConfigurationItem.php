<?php

namespace LanguageServerProtocol;

class ConfigurationItem
{
    /**
     * The scope to get the configuration section for.
     *
     * @var string|null
     */
    public $scopeUri;

    /**
     * The configuration section asked for.
     *
     * @var string|null
     */
    public $section;

    /**
     * @param string|null $scopeUri
     * @param string|null $section
     */
    public function __construct(?string $scopeUri, ?string $section)
    {
        $this->scopeUri = $scopeUri;
        $this->section = $section;
    }
}