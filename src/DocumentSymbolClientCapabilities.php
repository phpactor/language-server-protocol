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
     * @var type literal ...
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
        $this->dynamicRegistration = $dynamicRegistration;
        $this->symbolKind = $symbolKind;
        $this->hierarchicalDocumentSymbolSupport = $hierarchicalDocumentSymbolSupport;
    }
}