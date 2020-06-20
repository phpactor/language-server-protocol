<?php

namespace LanguageServerProtocol;

class WorkDoneProgressClientCapabilities
{
    /**
     * Window specific client capabilities.
     *
     * @var array<mixed>|null
     */
    public $window;

    /**
     * @param array<mixed>|null $window
     */
    public function __construct($window = null)
    {
        $this->window = $window;
    }
}