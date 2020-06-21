<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Since 3.14.0
 */
class DeclarationClientCapabilities
{
    /**
     * Whether declaration supports dynamic registration. If this is set to `true`
     * the client supports the new `DeclarationRegistrationOptions` return value
     * for the corresponding server capability as well.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * The client supports additional metadata in the form of declaration links.
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