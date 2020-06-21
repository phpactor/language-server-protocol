<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Represents the connection of two locations. Provides additional metadata over normal [locations](#Location),
 * including an origin range.
 */
class LocationLink
{
    /**
     * Span of the origin of this link.
     * 
     * Used as the underlined span for mouse definition hover. Defaults to the word range at
     * the definition position.
     *
     * @var Range|null
     */
    public $originSelectionRange;

    /**
     * The target resource identifier of this link.
     *
     * @var string
     */
    public $targetUri;

    /**
     * The full target range of this link. If the target for example is a symbol then target range is the
     * range enclosing this symbol not including leading/trailing whitespace but everything else
     * like comments. This information is typically used to highlight the range in the editor.
     *
     * @var Range
     */
    public $targetRange;

    /**
     * The range that should be selected and revealed when this link is being followed, e.g the name of a function.
     * Must be contained by the the `targetRange`. See also `DocumentSymbol#range`
     *
     * @var Range
     */
    public $targetSelectionRange;

    /**
     * @param Range|null $originSelectionRange
     * @param string $targetUri
     * @param Range $targetRange
     * @param Range $targetSelectionRange
     */
    public function __construct(string $targetUri, Range $targetRange, Range $targetSelectionRange, ?Range $originSelectionRange = null)
    {
        $this->originSelectionRange = $originSelectionRange;
        $this->targetUri = $targetUri;
        $this->targetRange = $targetRange;
        $this->targetSelectionRange = $targetSelectionRange;
    }

    /**
     * @param array<string,mixed> $array
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false): self
    {
        $map = [
            'originSelectionRange' => ['names' => [Range::class], 'iterable' => false],
            'targetUri' => ['names' => [], 'iterable' => false],
            'targetRange' => ['names' => [Range::class], 'iterable' => false],
            'targetSelectionRange' => ['names' => [Range::class], 'iterable' => false],
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