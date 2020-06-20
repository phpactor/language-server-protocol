<?php

namespace LanguageServerProtocol;

class DidChangeConfigurationRegistrationOptions
{
    /**
     *
     * @var string|array<string>|null
     */
    public $section;

    /**
     * @param string|array<string>|null $section
     */
    public function __construct($section = null)
    {
        $this->section = $section;
    }
}