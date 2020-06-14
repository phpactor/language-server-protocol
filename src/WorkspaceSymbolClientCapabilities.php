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
     * @var 
     */
    public $symbolKind;

    public function __construct(string $dynamicRegistration, null $symbolKind)
    {
        $this->$dynamicRegistration = $this->$dynamicRegistration;
        $this->$symbolKind = $this->$symbolKind;
    }
}