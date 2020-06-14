<?php

namespace LanguageServerProtocol;

class SelectionRange
{
    /**
     * The [range](#Range) of this selection range.
     *
     * @var Range
     */
    public $range;

    /**
     * The parent selection range containing this range. Therefore `parent.range` must contain `this.range`.
     *
     * @var SelectionRange
     */
    public $parent;

    public function __construct(Range $range, SelectionRange $parent)
    {
        $this->$range = $this->$range;
        $this->$parent = $this->$parent;
    }
}