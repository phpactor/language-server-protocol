<?php

namespace LanguageServerProtocol;

class ResourceOperation
{
    /**
     *
     * @var string
     */
    public $kind;

    public function __construct(string $kind)
    {
        $this->kind = $kind;
    }
}