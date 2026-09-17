<?php

namespace Phpactor\LanguageServerProtocol;

/**
 * Wraps a single CallHierarchyItem.
 *
 * The LSP requests textDocument/callHierarchy,
 * textDocument/callHierarchy/incomingCalls and
 * textDocument/callHierarchy/outgoingCalls all take a single
 * CallHierarchyItem as their parameter. This class wraps it so the
 * argument resolver (which only accepts *Params classes) can deserialize
 * the raw parameter array into a CallHierarchyItem.
 */
class CallHierarchyParams
{
    /**
     * The call hierarchy item.
     *
     * @var CallHierarchyItem
     */
    public $item;

    /**
     * @param CallHierarchyItem $item
     */
    public function __construct(CallHierarchyItem $item)
    {
        $this->item = $item;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        return new self(CallHierarchyItem::fromArray($array, $allowUnknownKeys));
    }
}
