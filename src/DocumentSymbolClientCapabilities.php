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
     * @var array<mixed>
     */
    public $symbolKind;

    /**
     * The client support hierarchical document symbols.
     *
     * @var string
     */
    public $hierarchicalDocumentSymbolSupport;

    /**
     * @param string $dynamicRegistration
     * @param array<mixed> $symbolKind
     * @param string $hierarchicalDocumentSymbolSupport
     */
    public function __construct(string $dynamicRegistration, $symbolKind, string $hierarchicalDocumentSymbolSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->symbolKind = $symbolKind;
        $this->hierarchicalDocumentSymbolSupport = $hierarchicalDocumentSymbolSupport;
    }
}