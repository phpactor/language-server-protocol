<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * The result of a hover request.
 */
class Hover
{
    /**
     * The hover's content
     *
     * @var MarkupContent|string|array<mixed>|array<string|array<mixed>>
     */
    public $contents;

    /**
     * An optional range
     *
     * @var Range|null
     */
    public $range;

    /**
     * @param MarkupContent|string|array<mixed>|array<string|array<mixed>> $contents
     * @param Range|null $range
     */
    public function __construct($contents, ?Range $range = null)
    {
        $this->contents = $contents;
        $this->range = $range;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'contents' => [MarkupContent::class, MarkedString::class],
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