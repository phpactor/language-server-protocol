<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * An event describing a file change.
 */
class FileEvent
{
    /**
     * The file's uri.
     *
     * @var string
     */
    public $uri;

    /**
     * The change type.
     *
     * @var 1|2|3
     */
    public $type;

    /**
     * @param string $uri
     * @param 1|2|3 $type
     */
    public function __construct(string $uri, $type)
    {
        $this->uri = $uri;
        $this->type = $type;
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