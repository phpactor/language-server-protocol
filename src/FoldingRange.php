<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Represents a folding range.
 */
class FoldingRange
{
    /**
     * The zero-based line number from where the folded range starts.
     *
     * @var int
     */
    public $startLine;

    /**
     * The zero-based character offset from where the folded range starts. If not defined, defaults to the length of the start line.
     *
     * @var int|null
     */
    public $startCharacter;

    /**
     * The zero-based line number where the folded range ends.
     *
     * @var int
     */
    public $endLine;

    /**
     * The zero-based character offset before the folded range ends. If not defined, defaults to the length of the end line.
     *
     * @var int|null
     */
    public $endCharacter;

    /**
     * Describes the kind of the folding range such as `comment' or 'region'. The kind
     * is used to categorize folding ranges and used by commands like 'Fold all comments'. See
     * [FoldingRangeKind](#FoldingRangeKind) for an enumeration of standardized kinds.
     *
     * @var string|null
     */
    public $kind;

    /**
     * @param int $startLine
     * @param int|null $startCharacter
     * @param int $endLine
     * @param int|null $endCharacter
     * @param string|null $kind
     */
    public function __construct(int $startLine, int $endLine, ?int $startCharacter = null, ?int $endCharacter = null, ?string $kind = null)
    {
        $this->startLine = $startLine;
        $this->startCharacter = $startCharacter;
        $this->endLine = $endLine;
        $this->endCharacter = $endCharacter;
        $this->kind = $kind;
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