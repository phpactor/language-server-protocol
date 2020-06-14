<?php

namespace LanguageServerProtocol;

class DidChangeConfigurationRegistrationOptions
{
    /**
     *
     * @var string|array<string>
     */
    public $section;

    public function __construct(object $section)
    {
        $this->section = $section;
    }
}