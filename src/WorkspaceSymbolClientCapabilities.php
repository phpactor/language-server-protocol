<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Client capabilities for a [WorkspaceSymbolRequest](#WorkspaceSymbolRequest).
 */
class WorkspaceSymbolClientCapabilities
{
    /**
     * Symbol request supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * Specific capabilities for the `SymbolKind` in the `workspace/symbol` request.
     *
     * @var array<mixed>|null
     */
    public $symbolKind;

    /**
     * @param bool|null $dynamicRegistration
     * @param array<mixed>|null $symbolKind
     */
    public function __construct(?bool $dynamicRegistration = null, $symbolKind = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->symbolKind = $symbolKind;
    }
}