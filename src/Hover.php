<?php

namespace LanguageServerProtocol;

class Hover
{
    /**
     * The hover's content
     *
     * @var MarkupContent|string|type literal ...|array<string|type literal ...>
     */
    public $contents;

    /**
     * An optional range
     *
     * @var Range
     */
    public $range;

    public function __construct(null $contents, Range $range)
    {
        $this->contents = $contents;
        $this->range = $range;
    }
}