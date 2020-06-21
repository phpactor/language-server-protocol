<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Client capabilities for a [WorkspaceSymbolRequest](#WorkspaceSymbolRequest).
 */
class WorkspaceSymbolClientCapabilities
{
    /**
     * Symbol request supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * Specific capabilities for the `SymbolKind` in the `workspace/symbol` request.
     *
     * @var array<mixed>|null
     */
    public $symbolKind;

    /**
     * @param bool|null $dynamicRegistration
     * @param array<mixed>|null $symbolKind
     */
    public function __construct(?bool $dynamicRegistration = null, ?array $symbolKind = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->symbolKind = $symbolKind;
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