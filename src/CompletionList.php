<?php

namespace LanguageServerProtocol;

class CompletionList
{
    /**
     * This list it not complete. Further typing results in recomputing this list.
     *
     * @var bool
     */
    public $isIncomplete;

    /**
     * The completion items.
     *
     * @var array<CompletionItem>
     */
    public $items;

    /**
     * @param bool $isIncomplete
     * @param array<CompletionItem> $items
     */
    public function __construct(bool $isIncomplete, array $items)
    {
        $this->isIncomplete = $isIncomplete;
        $this->items = $items;
    }
}