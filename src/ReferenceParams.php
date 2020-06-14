<?php

namespace LanguageServerProtocol;

class ReferenceParams
{
    /**
     *
     * @var ReferenceContext
     */
    public $context;

    public function __construct(ReferenceContext $context)
    {
        $this->context = $context;
    }
}