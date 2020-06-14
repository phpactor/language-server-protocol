<?php

namespace LanguageServerProtocol;

class DocumentSymbolClientCapabilities
{
    /**
     * Whether document symbol supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    /**
     * Specific capabilities for the `SymbolKind`.
     *
     * @var 
     */
    public $symbolKind;

    /**
     * The client support hierarchical document symbols.
     *
     * @var string
     */
    public $hierarchicalDocumentSymbolSupport;

    public function __construct(string $dynamicRegistration, null $symbolKind, string $hierarchicalDocumentSymbolSupport)
    {
        $this->$dynamicRegistration = $this->$dynamicRegistration;
        $this->$symbolKind = $this->$symbolKind;
        $this->$hierarchicalDocumentSymbolSupport = $this->$hierarchicalDocumentSymbolSupport;
    }
}