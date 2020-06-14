<?php

namespace LanguageServerProtocol;

class InitializeError
{
    /**
     * Indicates whether the client execute the following retry logic:
     * (1) show the message provided by the ResponseError to the user
     * (2) user selects retry or cancel
     * (3) if user selected retry the initialize method is sent again.
     *
     * @var string
     */
    public $retry;

    public function __construct(string $retry)
    {
        $this->retry = $retry;
    }
}