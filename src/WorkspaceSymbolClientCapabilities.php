<?php

namespace LanguageServerProtocol;

class WorkspaceSymbolClientCapabilities
{
    /**
     * Symbol request supports dynamic registration.
     *
     * @var string|null
     */
    public $dynamicRegistration;

    /**
     * Specific capabilities for the `SymbolKind` in the `workspace/symbol` request.
     *
     * @var array<mixed>|null
     */
    public $symbolKind;

    /**
     * @param string|null $dynamicRegistration
     * @param array<mixed>|null $symbolKind
     */
    public function __construct(?string $dynamicRegistration, ?$symbolKind)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->symbolKind = $symbolKind;
    }
}