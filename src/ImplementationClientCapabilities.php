<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * Since 3.6.0
 */
class ImplementationClientCapabilities
{
    /**
     * Whether implementation supports dynamic registration. If this is set to `true`
     * the client supports the new `ImplementationRegistrationOptions` return value
     * for the corresponding server capability as well.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * The client supports additional metadata in the form of definition links.
     * 
     * Since 3.14.0
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