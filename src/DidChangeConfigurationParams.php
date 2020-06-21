<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * The parameters of a change configuration notification.
 */
class DidChangeConfigurationParams
{
    /**
     * The actual changed settings
     *
     * @var mixed
     */
    public $settings;

    /**
     * @param mixed $settings
     */
    public function __construct($settings)
    {
        $this->settings = $settings;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}