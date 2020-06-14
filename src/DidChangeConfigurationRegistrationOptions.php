<?php

namespace LanguageServerProtocol;

class DidChangeConfigurationRegistrationOptions
{
    /**
     *
     * @var string|array<string>
     */
    public $section;

    /**
     * @param string|array<string> $section
     */
    public function __construct($section)
    {
        $this->section = $section;
    }
}