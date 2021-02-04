<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class SemanticTokensOptions extends WorkDoneProgressOptions
{
    /**
     * The legend used by the server
     *
     * @var SemanticTokensLegend
     */
    public $legend;

    /**
     * Server supports providing semantic tokens for a specific range
     * of a document.
     *
     * @var bool|array<mixed>|null
     */
    public $range;

    /**
     * Server supports providing semantic tokens for a full document.
     *
     * @var bool|array<mixed>|null
     */
    public $full;

    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param SemanticTokensLegend $legend
     * @param bool|array<mixed>|null $range
     * @param bool|array<mixed>|null $full
     * @param bool|null $workDoneProgress
     */
    public function __construct(SemanticTokensLegend $legend, $range = null, $full = null, ?bool $workDoneProgress = null)
    {
        $this->legend = $legend;
        $this->range = $range;
        $this->full = $full;
        $this->workDoneProgress = $workDoneProgress;
    }

    /**
     * @param array<string,mixed> $array
     * @return static
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'legend' => ['names' => [SemanticTokensLegend::class], 'iterable' => false],
            'range' => ['names' => [], 'iterable' => false],
            'full' => ['names' => [], 'iterable' => false],
            'workDoneProgress' => ['names' => [], 'iterable' => false],
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