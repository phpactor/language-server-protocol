<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * A literal to identify a text document in the client.
 */
class TextDocumentIdentifier
{
    /**
     * The text document's uri.
     *
     * @var string
     */
    public $uri;

    /**
     * @param string $uri
     */
    public function __construct(string $uri)
    {
        $this->uri = $uri;
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