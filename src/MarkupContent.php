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

    /**
     * @param 'plaintext'|'markdown' $kind
     * @param string $value
     */
    public function __construct($kind, string $value)
    {
        $this->kind = $kind;
        $this->value = $value;
    }
}