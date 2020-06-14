<?php

namespace LanguageServerProtocol;

class RenameOptions
{
    /**
     * Renames should be checked and tested before being executed.
     *
     * @var string
     */
    public $prepareProvider;

    /**
     * @param string $prepareProvider
     */
    public function __construct(string $prepareProvider)
    {
        $this->prepareProvider = $prepareProvider;
    }
}