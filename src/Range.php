<?php

namespace LanguageServerProtocol;

/**
 * A range in a text document expressed as (zero-based) start and end positions.
 * 
 * If you want to specify a range that contains a line including the line ending
 * character(s) then use an end position denoting the start of the next line.
 * For example:
 * ```ts
 * {
 *      start: { line: 5, character: 23 }
 *      end : { line 6, character : 0 }
 * }
 * ```
 */
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

    /**
     * @param Position $start
     * @param Position $end
     */
    public function __construct(Position $end, Position $start)
    {
        $this->start = $start;
        $this->end = $end;
    }
}