<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

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
    public function __construct(?bool $dynamicRegistration = null, ?array $symbolKind = null, ?bool $hierarchicalDocumentSymbolSupport = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->symbolKind = $symbolKind;
        $this->hierarchicalDocumentSymbolSupport = $hierarchicalDocumentSymbolSupport;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
        ];
        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                continue;
            }
            foreach ($map[$key] as $className) {
               try {
                   $value = Invoke::new($className, $value);
                   continue;
               } catch (Exception $e) {
                   continue;
               }
            }
        }
        return Invoke::new(self::class, $array);
    }
        
}