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
     * @var DocumentHighlightKind
     */
    public $kind;

    public function __construct(Range $range, DocumentHighlightKind $kind)
    {
        $this->range = $range;
        $this->kind = $kind;
    }
}