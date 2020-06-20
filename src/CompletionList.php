<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Represents a collection of [completion items](#CompletionItem) to be presented
 * in the editor.
 */
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