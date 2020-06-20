<?php

namespace LanguageServerProtocol;

/**
 * The parameters of a change configuration notification.
 */
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