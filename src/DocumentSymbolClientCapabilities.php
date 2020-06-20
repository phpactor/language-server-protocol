<?php

namespace LanguageServerProtocol;

/**
 * Client Capabilities for a [DocumentSymbolRequest](#DocumentSymbolRequest).
 */
class DocumentSymbolClientCapabilities
{
    /**
     * Whether document symbol supports dynamic registration.
     *
     * @var bool|null
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
     * @var bool|null
     */
    public $hierarchicalDocumentSymbolSupport;

    /**
     * @param bool|null $dynamicRegistration
     * @param array<mixed>|null $symbolKind
     * @param bool|null $hierarchicalDocumentSymbolSupport
     */
    public function __construct(?bool $dynamicRegistration = null, $symbolKind = null, ?bool $hierarchicalDocumentSymbolSupport = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->symbolKind = $symbolKind;
        $this->hierarchicalDocumentSymbolSupport = $hierarchicalDocumentSymbolSupport;
    }
}