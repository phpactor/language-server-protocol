<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Client Capabilities for a [ReferencesRequest](#ReferencesRequest).
 */
class ReferenceClientCapabilities
{
    /**
     * Whether references supports dynamic registration.
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