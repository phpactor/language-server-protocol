<?php

namespace LanguageServerProtocol;

class CodeLensOptions
{
    /**
     * Code lens has a resolve provider as well.
     *
     * @var string
     */
    public $resolveProvider;

    public function __construct(string $resolveProvider)
    {
        $this->$resolveProvider = $this->$resolveProvider;
    }
}