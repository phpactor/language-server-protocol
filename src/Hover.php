<?php

namespace LanguageServerProtocol;

/**
 * The result of a hover request.
 */
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
     * @var Range|null
     */
    public $range;

    /**
     * @param MarkupContent|string|array<mixed>|array<string|array<mixed>> $contents
     * @param Range|null $range
     */
    public function __construct($contents, ?Range $range)
    {
        $this->contents = $contents;
        $this->range = $range;
    }
}