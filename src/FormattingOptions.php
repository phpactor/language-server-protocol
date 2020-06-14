<?php

namespace LanguageServerProtocol;

class FormattingOptions
{
    /**
     * Size of a tab in spaces.
     *
     * @var int
     */
    public $tabSize;

    /**
     * Prefer spaces over tabs.
     *
     * @var string
     */
    public $insertSpaces;

    /**
     * Trim trailing whitespaces on a line.
     *
     * @var string
     */
    public $trimTrailingWhitespace;

    /**
     * Insert a newline character at the end of the file if one does not exist.
     *
     * @var string
     */
    public $insertFinalNewline;

    /**
     * Trim all newlines after the final newline at the end of the file.
     *
     * @var string
     */
    public $trimFinalNewlines;

    public function __construct(int $tabSize, string $insertSpaces, string $trimTrailingWhitespace, string $insertFinalNewline, string $trimFinalNewlines)
    {
        $this->tabSize = $tabSize;
        $this->insertSpaces = $insertSpaces;
        $this->trimTrailingWhitespace = $trimTrailingWhitespace;
        $this->insertFinalNewline = $insertFinalNewline;
        $this->trimFinalNewlines = $trimFinalNewlines;
    }
}