<?php

namespace LanguageServerProtocol;

class Hover
{
    /**
     * The hover's content
     *
     * @var MarkupContent|MarkedString|array<MarkedString>
     */
    public $contents;

    /**
     * An optional range
     *
     * @var Range
     */
    public $range;

    public function __construct(object $contents, Range $range)
    {
        $this->$contents = $this->$contents;
        $this->$range = $this->$range;
    }
}