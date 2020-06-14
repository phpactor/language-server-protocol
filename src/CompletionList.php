<?php

namespace LanguageServerProtocol;

class CompletionList
{
    /**
     * This list it not complete. Further typing results in recomputing this list.
     *
     * @var string
     */
    public $isIncomplete;

    /**
     * The completion items.
     *
     * @var array<CompletionItem>
     */
    public $items;

    public function __construct(string $isIncomplete, array $items)
    {
        $this->isIncomplete = $isIncomplete;
        $this->items = $items;
    }
}