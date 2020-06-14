<?php

namespace LanguageServerProtocol;

class SaveOptions
{
    /**
     * The client is supposed to include the content on save.
     *
     * @var string
     */
    public $includeText;

    /**
     * @param string $includeText
     */
    public function __construct(string $includeText)
    {
        $this->includeText = $includeText;
    }
}