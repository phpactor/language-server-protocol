<?php

namespace LanguageServerProtocol;

class Range
{
    /**
     * The range's start position
     *
     * @var Position
     */
    public $start;

    /**
     * The range's end position.
     *
     * @var Position
     */
    public $end;

    public function __construct(Position $start, Position $end)
    {
        $this->start = $start;
        $this->end = $end;
    }
}