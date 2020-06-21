<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * The Client Capabilities of a [CodeActionRequest](#CodeActionRequest).
 */
class CodeActionClientCapabilities
{
    /**
     * Whether code action supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * The client support code action literals as a valid
     * response of the `textDocument/codeAction` request.
     *
     * @var array<mixed>|null
     */
    public $codeActionLiteralSupport;

    /**
     * Whether code action supports the `isPreferred` property.
     *
     * @var bool|null
     */
    public $isPreferredSupport;

    /**
     * @param bool|null $dynamicRegistration
     * @param array<mixed>|null $codeActionLiteralSupport
     * @param bool|null $isPreferredSupport
     */
    public function __construct(?bool $dynamicRegistration = null, ?array $codeActionLiteralSupport = null, ?bool $isPreferredSupport = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->codeActionLiteralSupport = $codeActionLiteralSupport;
        $this->isPreferredSupport = $isPreferredSupport;
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