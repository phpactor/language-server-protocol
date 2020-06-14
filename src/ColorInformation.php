<?php

namespace LanguageServerProtocol;

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

    public function __construct(Range $range, Color $color)
    {
        $this->range = $range;
        $this->color = $color;
    }
}