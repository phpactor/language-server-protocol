<?php

namespace LanguageServerProtocol;

class RenameOptions
{
    /**
     * Renames should be checked and tested before being executed.
     *
     * @var string|null
     */
    public $prepareProvider;

    /**
     * @param string|null $prepareProvider
     */
    public function __construct(?string $prepareProvider)
    {
        $this->prepareProvider = $prepareProvider;
    }
}