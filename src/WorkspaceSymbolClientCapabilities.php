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
     * @var type literal ...
     */
    public $symbolKind;

    public function __construct(string $dynamicRegistration, null $symbolKind)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->symbolKind = $symbolKind;
    }
}