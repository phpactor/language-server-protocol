<?php

namespace LanguageServerProtocol;

/**
 * Value-object that contains additional information when
 * requesting references.
 */
class ReferenceContext
{
    /**
     * Include the declaration of the current symbol.
     *
     * @var bool
     */
    public $includeDeclaration;

    /**
     * @param bool $includeDeclaration
     */
    public function __construct(bool $includeDeclaration)
    {
        $this->includeDeclaration = $includeDeclaration;
    }
}