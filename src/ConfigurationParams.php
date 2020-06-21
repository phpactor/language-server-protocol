<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

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

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}