<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * The publish diagnostic client capabilities.
 */
class PublishDiagnosticsClientCapabilities
{
    /**
     * Whether the clients accepts diagnostics with related information.
     *
     * @var bool|null
     */
    public $relatedInformation;

    /**
     * Client supports the tag property to provide meta data about a diagnostic.
     * Clients supporting tags have to handle unknown tags gracefully.
     *
     * @var array<mixed>|null
     */
    public $tagSupport;

    /**
     * Whether the client interprets the version property of the
     * `textDocument/publishDiagnostics` notification's parameter.
     *
     * @var bool|null
     */
    public $versionSupport;

    /**
     * Client supports a codeDescription property
     *
     * @var bool|null
     */
    public $codeDescriptionSupport;

    /**
     * Whether code action supports the `data` property which is
     * preserved between a `textDocument/publishDiagnostics` and
     * `textDocument/codeAction` request.
     *
     * @var bool|null
     */
    public $dataSupport;

    /**
     * @param bool|null $relatedInformation
     * @param array<mixed>|null $tagSupport
     * @param bool|null $versionSupport
     * @param bool|null $codeDescriptionSupport
     * @param bool|null $dataSupport
     */
    public function __construct(?bool $relatedInformation = null, ?array $tagSupport = null, ?bool $versionSupport = null, ?bool $codeDescriptionSupport = null, ?bool $dataSupport = null)
    {
        $this->relatedInformation = $relatedInformation;
        $this->tagSupport = $tagSupport;
        $this->versionSupport = $versionSupport;
        $this->codeDescriptionSupport = $codeDescriptionSupport;
        $this->dataSupport = $dataSupport;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'relatedInformation' => ['names' => [], 'iterable' => false],
            'tagSupport' => ['names' => [], 'iterable' => false],
            'versionSupport' => ['names' => [], 'iterable' => false],
            'codeDescriptionSupport' => ['names' => [], 'iterable' => false],
            'dataSupport' => ['names' => [], 'iterable' => false],
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