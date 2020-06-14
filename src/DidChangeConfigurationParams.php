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

    public function __construct(null $settings)
    {
        $this->$settings = $this->$settings;
    }
}