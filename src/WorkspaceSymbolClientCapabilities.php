<?php

namespace LanguageServerProtocol;

class WorkspaceSymbolClientCapabilities
{
    /**
     * Symbol request supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    /**
     * Specific capabilities for the `SymbolKind` in the `workspace/symbol` request.
     *
     * @var array<mixed>
     */
    public $symbolKind;

    /**
     * @param string $dynamicRegistration
     * @param array<mixed> $symbolKind
     */
    public function __construct(string $dynamicRegistration, $symbolKind)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->symbolKind = $symbolKind;
    }
}