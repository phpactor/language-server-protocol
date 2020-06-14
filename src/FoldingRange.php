<?php

namespace LanguageServerProtocol;

class FoldingRange
{
    /**
     * The zero-based line number from where the folded range starts.
     *
     * @var int
     */
    public $startLine;

    /**
     * The zero-based character offset from where the folded range starts. If not defined, defaults to the length of the start line.
     *
     * @var int|null
     */
    public $startCharacter;

    /**
     * The zero-based line number where the folded range ends.
     *
     * @var int
     */
    public $endLine;

    /**
     * The zero-based character offset before the folded range ends. If not defined, defaults to the length of the end line.
     *
     * @var int|null
     */
    public $endCharacter;

    /**
     * Describes the kind of the folding range such as `comment' or 'region'. The kind
     * is used to categorize folding ranges and used by commands like 'Fold all comments'. See
     * [FoldingRangeKind](#FoldingRangeKind) for an enumeration of standardized kinds.
     *
     * @var string|null
     */
    public $kind;

    /**
     * @param int $startLine
     * @param int|null $startCharacter
     * @param int $endLine
     * @param int|null $endCharacter
     * @param string|null $kind
     */
    public function __construct(int $startLine, ?int $startCharacter, int $endLine, ?int $endCharacter, ?string $kind)
    {
        $this->startLine = $startLine;
        $this->startCharacter = $startCharacter;
        $this->endLine = $endLine;
        $this->endCharacter = $endCharacter;
        $this->kind = $kind;
    }
}