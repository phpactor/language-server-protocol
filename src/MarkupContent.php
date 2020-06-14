<?php

namespace LanguageServerProtocol;

class MarkupContent
{
    /**
     * The type of the Markup
     *
     * @var MarkupKind
     */
    public $kind;

    /**
     * The content itself
     *
     * @var string
     */
    public $value;

    public function __construct(MarkupKind $kind, string $value)
    {
        $this->$kind = $this->$kind;
        $this->$value = $this->$value;
    }
}