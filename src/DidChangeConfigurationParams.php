<?php

namespace LanguageServerProtocol;

class DidChangeConfigurationParams
{
    /**
     * The actual changed settings
     *
     * @var mixed
     */
    public $settings;

    /**
     * @param mixed $settings
     */
    public function __construct($settings)
    {
        $this->settings = $settings;
    }
}