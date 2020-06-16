<?php

namespace LanguageServerProtocol;

class DocumentSymbolClientCapabilities
{
    /**
     * Whether document symbol supports dynamic registration.
     *
     * @var string|null
     */
    public $dynamicRegistration;

    /**
     * Specific capabilities for the `SymbolKind`.
     *
     * @var array<mixed>|null
     */
    public $symbolKind;

    /**
     * The client support hierarchical document symbols.
     *
     * @var string|null
     */
    public $hierarchicalDocumentSymbolSupport;

    /**
     * @param string|null $dynamicRegistration
     * @param array<mixed>|null $symbolKind
     * @param string|null $hierarchicalDocumentSymbolSupport
     */
    public function __construct(?string $dynamicRegistration, $symbolKind, ?string $hierarchicalDocumentSymbolSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->symbolKind = $symbolKind;
        $this->hierarchicalDocumentSymbolSupport = $hierarchicalDocumentSymbolSupport;
    }
}