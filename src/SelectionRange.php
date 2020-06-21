<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

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
    public function __construct(Range $range, ?SelectionRange $parent = null)
    {
        $this->range = $range;
        $this->parent = $parent;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}