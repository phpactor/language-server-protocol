<?php

namespace LanguageServerProtocol;

/**
 * Value-object describing what options formatting should use.
 */
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
     * @var bool
     */
    public $insertSpaces;

    /**
     * Trim trailing whitespaces on a line.
     *
     * @var bool|null
     */
    public $trimTrailingWhitespace;

    /**
     * Insert a newline character at the end of the file if one does not exist.
     *
     * @var bool|null
     */
    public $insertFinalNewline;

    /**
     * Trim all newlines after the final newline at the end of the file.
     *
     * @var bool|null
     */
    public $trimFinalNewlines;

    /**
     * @param int $tabSize
     * @param bool $insertSpaces
     * @param bool|null $trimTrailingWhitespace
     * @param bool|null $insertFinalNewline
     * @param bool|null $trimFinalNewlines
     */
    public function __construct(int $tabSize, bool $insertSpaces, ?bool $trimTrailingWhitespace, ?bool $insertFinalNewline, ?bool $trimFinalNewlines)
    {
        $this->tabSize = $tabSize;
        $this->insertSpaces = $insertSpaces;
        $this->trimTrailingWhitespace = $trimTrailingWhitespace;
        $this->insertFinalNewline = $insertFinalNewline;
        $this->trimFinalNewlines = $trimFinalNewlines;
    }
}