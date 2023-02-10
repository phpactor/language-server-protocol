<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Position in a text document expressed as zero-based line and character
 * offset. Prior to 3.17 the offsets were always based on a UTF-16 string
 * representation. So a string of the form `a𐐀b` the character offset of the
 * character `a` is 0, the character offset of `𐐀` is 1 and the character
 * offset of b is 3 since `𐐀` is represented using two code units in UTF-16.
 * Since 3.17 clients and servers can agree on a different string encoding
 * representation (e.g. UTF-8). The client announces it's supported encoding
 * via the client capability [`general.positionEncodings`](#clientCapabilities).
 * The value is an array of position encodings the client supports, with
 * decreasing preference (e.g. the encoding at index `0` is the most preferred
 * one). To stay backwards compatible the only mandatory encoding is UTF-16
 * represented via the string `utf-16`. The server can pick one of the
 * encodings offered by the client and signals that encoding back to the
 * client via the initialize result's property
 * [`capabilities.positionEncoding`](#serverCapabilities). If the string value
 * `utf-16` is missing from the client's capability `general.positionEncodings`
 * servers can safely assume that the client supports UTF-16. If the server
 * omits the position encoding in its initialize result the encoding defaults
 * to the string value `utf-16`. Implementation considerations: since the
 * conversion from one encoding into another requires the content of the
 * file / line the conversion is best done where the file is read which is
 * usually on the server side.
 * 
 * Positions are line end character agnostic. So you can not specify a position
 * that denotes `\r|\n` or `\n|` where `|` represents the character offset.
 */
class Position
{
    /**
     * Line position in a document (zero-based).
     * 
     * If a line number is greater than the number of lines in a document, it defaults back to the number of lines in the document.
     * If a line number is negative, it defaults to 0.
     *
     * @var int
     */
    public $line;

    /**
     * Character offset on a line in a document (zero-based).
     * 
     * The meaning of this offset is determined by the negotiated
     * `PositionEncodingKind`.
     * 
     * If the character value is greater than the line length it defaults back to the
     * line length.
     *
     * @var int
     */
    public $character;

    /**
     * @param int $line
     * @param int $character
     */
    public function __construct(int $line, int $character)
    {
        $this->line = $line;
        $this->character = $character;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'line' => ['names' => [], 'iterable' => false],
            'character' => ['names' => [], 'iterable' => false],
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