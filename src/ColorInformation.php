<?php

namespace LanguageServerProtocol;

/**
 * Represents a color range from a document.
 */
class ColorInformation
{
    /**
     * The range in the document where this color appers.
     *
     * @var Range
     */
    public $range;

    /**
     * The actual color value for this color range.
     *
     * @var Color
     */
    public $color;

    /**
     * @param Range $range
     * @param Color $color
     */
    public function __construct(Color $color, Range $range)
    {
        $this->range = $range;
        $this->color = $color;
    }
}