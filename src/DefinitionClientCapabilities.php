<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * Client Capabilities for a [DefinitionRequest](#DefinitionRequest).
 */
class DefinitionClientCapabilities
{
    /**
     * Whether definition supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * The client supports additional metadata in the form of definition links.
     *
     * @var bool|null
     */
    public $linkSupport;

    /**
     * @param bool|null $dynamicRegistration
     * @param bool|null $linkSupport
     */
    public function __construct(?bool $dynamicRegistration = null, ?bool $linkSupport = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->linkSupport = $linkSupport;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}