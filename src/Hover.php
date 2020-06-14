<?php

namespace LanguageServerProtocol;

class Hover
{
    /**
     * The hover's content
     *
     * @var MarkupContent|string|array<mixed>|array<string|array<mixed>>
     */
    public $contents;

    /**
     * An optional range
     *
     * @var Range
     */
    public $range;

    /**
     * @param MarkupContent|string|array<mixed>|array<string|array<mixed>> $contents
     * @param Range $range
     */
    public function __construct($contents, Range $range)
    {
        $this->contents = $contents;
        $this->range = $range;
    }
}