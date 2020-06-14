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

    /**
     * @param string $resolveProvider
     */
    public function __construct(string $resolveProvider)
    {
        $this->resolveProvider = $resolveProvider;
    }
}