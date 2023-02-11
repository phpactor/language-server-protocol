<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * General client capabilities.
 */
class GeneralClientCapabilities
{
    /**
     * Client capability that signals how the client
     * handles stale requests (e.g. a request
     * for which the client will not process the response
     * anymore since the information is outdated).
     *
     * @var array{cancel:bool,retryOnContentModified:array<string>}|null
     */
    public $staleRequestSupport;

    /**
     * Client capabilities specific to regular expressions.
     *
     * @var RegularExpressionsClientCapabilities|null
     */
    public $regularExpressions;

    /**
     * Client capabilities specific to the client's markdown parser.
     *
     * @var MarkdownClientCapabilities|null
     */
    public $markdown;

    /**
     * The position encodings supported by the client. Client and server
     * have to agree on the same position encoding to ensure that offsets
     * (e.g. character position in a line) are interpreted the same on both
     * sides.
     * 
     * To keep the protocol backwards compatible the following applies: if
     * the value 'utf-16' is missing from the array of position encodings
     * servers can assume that the client supports UTF-16. UTF-16 is
     * therefore a mandatory encoding.
     * 
     * If omitted it defaults to ['utf-16'].
     * 
     * Implementation considerations: since the conversion from one encoding
     * into another requires the content of the file / line the conversion
     * is best done where the file is read which is usually on the server
     * side.
     *
     * @var array<string>|null
     */
    public $positionEncodings;

    /**
     * @param array{cancel:bool,retryOnContentModified:array<string>}|null $staleRequestSupport
     * @param RegularExpressionsClientCapabilities|null $regularExpressions
     * @param MarkdownClientCapabilities|null $markdown
     * @param array<string>|null $positionEncodings
     */
    public function __construct(?array $staleRequestSupport = null, ?RegularExpressionsClientCapabilities $regularExpressions = null, ?MarkdownClientCapabilities $markdown = null, ?array $positionEncodings = null)
    {
        $this->staleRequestSupport = $staleRequestSupport;
        $this->regularExpressions = $regularExpressions;
        $this->markdown = $markdown;
        $this->positionEncodings = $positionEncodings;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'staleRequestSupport' => ['names' => [], 'iterable' => false],
            'regularExpressions' => ['names' => [RegularExpressionsClientCapabilities::class], 'iterable' => false],
            'markdown' => ['names' => [MarkdownClientCapabilities::class], 'iterable' => false],
            'positionEncodings' => ['names' => [], 'iterable' => true],
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