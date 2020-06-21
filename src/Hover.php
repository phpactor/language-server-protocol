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
        return Invoke::new(self::class, $array);
    }
        
}