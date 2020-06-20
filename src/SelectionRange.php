<?php

namespace LanguageServerProtocol;

/**
 * A selection range represents a part of a selection hierarchy. A selection range
 * may have a parent selection range that contains it.
 */
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
     * @var SelectionRange|null
     */
    public $parent;

    /**
     * @param Range $range
     * @param SelectionRange|null $parent
     */
    public function __construct(Range $range, ?SelectionRange $parent)
    {
        $this->range = $range;
        $this->parent = $parent;
    }
}