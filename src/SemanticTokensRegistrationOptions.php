<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, SemanticTokensOptions, StaticRegistrationOptions
 */
class SemanticTokensRegistrationOptions extends TextDocumentRegistrationOptions
{
    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

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
     * The id used to register the request. The id can be used to deregister
     * the request again. See also Registration#id.
     *
     * @var string|null
     */
    public $id;

    /**
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     * @param SemanticTokensLegend $legend
     * @param bool|array<mixed>|null $range
     * @param bool|array<mixed>|null $full
     * @param bool|null $workDoneProgress
     * @param string|null $id
     */
    public function __construct(SemanticTokensLegend $legend, $documentSelector = null, $range = null, $full = null, ?bool $workDoneProgress = null, ?string $id = null)
    {
        $this->documentSelector = $documentSelector;
        $this->legend = $legend;
        $this->range = $range;
        $this->full = $full;
        $this->workDoneProgress = $workDoneProgress;
        $this->id = $id;
    }

    /**
     * @param array<string,mixed> $array
     * @return static
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'documentSelector' => ['names' => [], 'iterable' => false],
            'legend' => ['names' => [SemanticTokensLegend::class], 'iterable' => false],
            'range' => ['names' => [], 'iterable' => false],
            'full' => ['names' => [], 'iterable' => false],
            'workDoneProgress' => ['names' => [], 'iterable' => false],
            'id' => ['names' => [], 'iterable' => false],
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