<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

class DidChangeConfigurationClientCapabilities
{
    /**
     * Did change configuration notification supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * @param bool|null $dynamicRegistration
     */
    public function __construct(?bool $dynamicRegistration = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
    }
}