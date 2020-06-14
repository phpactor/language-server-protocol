<?php

namespace LanguageServerProtocol;

class DocumentHighlight
{
    /**
     * The range this highlight applies to.
     *
     * @var Range
     */
    public $range;

    /**
     * The highlight kind, default is [text](#DocumentHighlightKind.Text).
     *
     * @var 1|2|3
     */
    public $kind;

    public function __construct(Range $range, null $kind)
    {
        $this->range = $range;
        $this->kind = $kind;
    }
}