<?php

namespace LanguageServerProtocol;

class ResourceOperation
{
    /**
     *
     * @var string
     */
    public $kind;

    /**
     * @param string $kind
     */
    public function __construct(string $kind)
    {
        $this->kind = $kind;
    }
}