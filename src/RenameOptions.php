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

    public function __construct(string $prepareProvider)
    {
        $this->$prepareProvider = $this->$prepareProvider;
    }
}