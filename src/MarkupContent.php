<?php

namespace LanguageServerProtocol;

class MarkupContent
{
    /**
     * The type of the Markup
     *
     * @var 'plaintext'|'markdown'
     */
    public $kind;

    /**
     * The content itself
     *
     * @var string
     */
    public $value;

    public function __construct(null $kind, string $value)
    {
        $this->kind = $kind;
        $this->value = $value;
    }
}