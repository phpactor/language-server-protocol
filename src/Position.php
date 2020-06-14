<?php

namespace LanguageServerProtocol;

class Position
{
    /**
     * Line position in a document (zero-based).
     * If a line number is greater than the number of lines in a document, it defaults back to the number of lines in the document.
     * If a line number is negative, it defaults to 0.
     *
     * @var int
     */
    public $line;

    /**
     * Character offset on a line in a document (zero-based). Assuming that the line is
     * represented as a string, the `character` value represents the gap between the
     * `character` and `character + 1`.
     * 
     * If the character value is greater than the line length it defaults back to the
     * line length.
     * If a line number is negative, it defaults to 0.
     *
     * @var int
     */
    public $character;

    public function __construct(int $line, int $character)
    {
        $this->$line = $this->$line;
        $this->$character = $this->$character;
    }
}