<?php

namespace LanguageServerProtocol;

class ConfigurationParams
{
    /**
     *
     * @var array<ConfigurationItem>
     */
    public $items;

    /**
     * @param array<ConfigurationItem> $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }
}