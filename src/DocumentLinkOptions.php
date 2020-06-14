<?php

namespace LanguageServerProtocol;

class DocumentLinkOptions
{
    /**
     * Document links have a resolve provider as well.
     *
     * @var string|null
     */
    public $resolveProvider;

    /**
     * @param string|null $resolveProvider
     */
    public function __construct(?string $resolveProvider)
    {
        $this->resolveProvider = $resolveProvider;
    }
}