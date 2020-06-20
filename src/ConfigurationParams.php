<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * The parameters of a configuration request.
 */
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