<?php

namespace LanguageServerProtocol;

class Color
{
    /**
     * The red component of this color in the range [0-1].
     *
     * @var int
     */
    public $red;

    /**
     * The green component of this color in the range [0-1].
     *
     * @var int
     */
    public $green;

    /**
     * The blue component of this color in the range [0-1].
     *
     * @var int
     */
    public $blue;

    /**
     * The alpha component of this color in the range [0-1].
     *
     * @var int
     */
    public $alpha;

    public function __construct(int $red, int $green, int $blue, int $alpha)
    {
        $this->$red = $this->$red;
        $this->$green = $this->$green;
        $this->$blue = $this->$blue;
        $this->$alpha = $this->$alpha;
    }
}