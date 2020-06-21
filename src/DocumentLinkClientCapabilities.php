<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * The client capabilities of a [DocumentLinkRequest](#DocumentLinkRequest).
 */
class DocumentLinkClientCapabilities
{
    /**
     * Whether document link supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * Whether the client support the `tooltip` property on `DocumentLink`.
     *
     * @var bool|null
     */
    public $tooltipSupport;

    /**
     * @param bool|null $dynamicRegistration
     * @param bool|null $tooltipSupport
     */
    public function __construct(?bool $dynamicRegistration = null, ?bool $tooltipSupport = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->tooltipSupport = $tooltipSupport;
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