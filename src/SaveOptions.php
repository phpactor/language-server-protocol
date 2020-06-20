<?php

namespace LanguageServerProtocol;

class SaveOptions
{
    /**
     * The client is supposed to include the content on save.
     *
     * @var bool|null
     */
    public $includeText;

    /**
     * @param bool|null $includeText
     */
    public function __construct(?bool $includeText)
    {
        $this->includeText = $includeText;
    }
}