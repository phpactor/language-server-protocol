<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

class HoverClientCapabilities
{
    /**
     * Whether hover supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * Client supports the follow content formats for the content
     * property. The order describes the preferred format of the client.
     *
     * @var array<'plaintext'|'markdown'>|null
     */
    public $contentFormat;

    /**
     * @param bool|null $dynamicRegistration
     * @param array<'plaintext'|'markdown'>|null $contentFormat
     */
    public function __construct(?bool $dynamicRegistration = null, ?array $contentFormat = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->contentFormat = $contentFormat;
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