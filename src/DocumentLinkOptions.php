<?php

namespace LanguageServerProtocol;

class DocumentLinkOptions
{
    /**
     * Document links have a resolve provider as well.
     *
     * @var string
     */
    public $resolveProvider;

    public function __construct(string $resolveProvider)
    {
        $this->resolveProvider = $resolveProvider;
    }
}