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
     * @var 1|2|3|null
     */
    public $kind;

    /**
     * @param Range $range
     * @param 1|2|3|null $kind
     */
    public function __construct(Range $range, $kind)
    {
        $this->range = $range;
        $this->kind = $kind;
    }
}