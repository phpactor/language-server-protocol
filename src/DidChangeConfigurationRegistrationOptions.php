<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

class DidChangeConfigurationRegistrationOptions
{
    /**
     *
     * @var string|array<string>|null
     */
    public $section;

    /**
     * @param string|array<string>|null $section
     */
    public function __construct($section = null)
    {
        $this->section = $section;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}