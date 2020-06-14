<?php

namespace LanguageServerProtocol;

class ReferenceContext
{
    /**
     * Include the declaration of the current symbol.
     *
     * @var string
     */
    public $includeDeclaration;

    /**
     * @param string $includeDeclaration
     */
    public function __construct(string $includeDeclaration)
    {
        $this->includeDeclaration = $includeDeclaration;
    }
}