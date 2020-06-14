<?php

namespace LanguageServerProtocol;

class WorkDoneProgressClientCapabilities
{
    /**
     * Window specific client capabilities.
     *
     * @var array<mixed>
     */
    public $window;

    /**
     * @param array<mixed> $window
     */
    public function __construct($window)
    {
        $this->window = $window;
    }
}