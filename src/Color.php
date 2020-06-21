<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * Represents a color in RGBA space.
 */
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

    /**
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $alpha
     */
    public function __construct(int $red, int $green, int $blue, int $alpha)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
        $this->alpha = $alpha;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}