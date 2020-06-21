<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Represents a location inside a resource, such as a line
 * inside a text file.
 */
class Location
{
    /**
     *
     * @var string
     */
    public $uri;

    /**
     *
     * @var Range
     */
    public $range;

    /**
     * @param string $uri
     * @param Range $range
     */
    public function __construct(string $uri, Range $range)
    {
        $this->uri = $uri;
        $this->range = $range;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'range' => [Range::class],
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