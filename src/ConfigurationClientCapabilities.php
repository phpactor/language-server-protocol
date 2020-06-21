<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

class ConfigurationClientCapabilities
{
    /**
     * The workspace client capabilities
     *
     * @var array<mixed>|null
     */
    public $workspace;

    /**
     * @param array<mixed>|null $workspace
     */
    public function __construct(?array $workspace = null)
    {
        $this->workspace = $workspace;
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