<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Represents a folding range. To be valid, start and end line must be bigger than zero and smaller
 * than the number of lines in the document. Clients are free to ignore invalid ranges.
 */
class FoldingRange
{
    /**
     * The zero-based start line of the range to fold. The folded area starts after the line's last character.
     * To be valid, the end must be zero or larger and smaller than the number of lines in the document.
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
     * The zero-based end line of the range to fold. The folded area ends with the line's last character.
     * To be valid, the end must be zero or larger and smaller than the number of lines in the document.
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
     * is used to categorize folding ranges. See [FoldingRangeKind](#FoldingRangeKind)
     * for an enumeration of standardized kinds.
     *
     * @var FoldingRangeKind::*|null
     */
    public $kind;

    /**
     * The text that the client should show when the specified range is
     * collapsed. If not defined or not supported by the client, a default
     * will be chosen by the client.
     *
     * @var string|null
     */
    public $collapsedText;

    /**
     * @param int $startLine
     * @param int|null $startCharacter
     * @param int $endLine
     * @param int|null $endCharacter
     * @param FoldingRangeKind::*|null $kind
     * @param string|null $collapsedText
     */
    public function __construct(int $startLine, int $endLine, ?int $startCharacter = null, ?int $endCharacter = null, $kind = null, ?string $collapsedText = null)
    {
        $this->startLine = $startLine;
        $this->startCharacter = $startCharacter;
        $this->endLine = $endLine;
        $this->endCharacter = $endCharacter;
        $this->kind = $kind;
        $this->collapsedText = $collapsedText;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false): self
    {
        $map = [
            'startLine' => ['names' => [], 'iterable' => false],
            'startCharacter' => ['names' => [], 'iterable' => false],
            'endLine' => ['names' => [], 'iterable' => false],
            'endCharacter' => ['names' => [], 'iterable' => false],
            'kind' => ['names' => [], 'iterable' => false],
            'collapsedText' => ['names' => [], 'iterable' => false],
        ];

        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                if ($allowUnknownKeys) {
                    unset($array[$key]);
                    continue;
                }

                throw new RuntimeException(sprintf(
                    'Parameter "%s" on class "%s" not known, known parameters: "%s"',
                    $key, 
                    self::class,
                    implode('", "', array_keys($map))
                ));
            }

            // from here we only care about arrays that can be transformed into
            // objects
            if (!is_array($value)) {
                continue;
            }

            if (empty($map[$key]['names'])) {
                continue;
            }

            if ($map[$key]['iterable']) {
                $value = array_map(function ($object) use ($map, $key, $allowUnknownKeys) {
                    if (!is_array($object)) {
                        return $object;
                    }

                    return self::invokeFromNames($map[$key]['names'], $object, $allowUnknownKeys) ?: $object;
                }, $value);
                continue;
            }

            $names = $map[$key]['names'];
            $value = self::invokeFromNames($names, $value, $allowUnknownKeys) ?: $value;
        }
        
        return Invoke::new(self::class, $array);
    }

    /**
     * @param array<string> $classNames
     * @param array<string,mixed> $object
     */
    private static function invokeFromNames(array $classNames, array $object, bool $allowUnknownKeys): ?object
    {
        $lastException = null;
        foreach ($classNames as $className) {
            try {
                // @phpstan-ignore-next-line
                return call_user_func_array($className . '::fromArray', [$object, $allowUnknownKeys]);
            } catch (Exception $exception) {
                $lastException = $exception;
                continue;
            }
        }

        throw $lastException;
    }
        
}