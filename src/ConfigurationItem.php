<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

class ConfigurationItem
{
    /**
     * The scope to get the configuration section for.
     *
     * @var string|null
     */
    public $scopeUri;

    /**
     * The configuration section asked for.
     *
     * @var string|null
     */
    public $section;

    /**
     * @param string|null $scopeUri
     * @param string|null $section
     */
    public function __construct(?string $scopeUri = null, ?string $section = null)
    {
        $this->scopeUri = $scopeUri;
        $this->section = $section;
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