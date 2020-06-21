<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * The publish diagnostic notification's parameters.
 */
class PublishDiagnosticsParams
{
    /**
     * The URI for which diagnostic information is reported.
     *
     * @var string
     */
    public $uri;

    /**
     * Optional the version number of the document the diagnostics are published for.
     *
     * @var int|null
     */
    public $version;

    /**
     * An array of diagnostic information items.
     *
     * @var array<Diagnostic>
     */
    public $diagnostics;

    /**
     * @param string $uri
     * @param int|null $version
     * @param array<Diagnostic> $diagnostics
     */
    public function __construct(string $uri, array $diagnostics, ?int $version = null)
    {
        $this->uri = $uri;
        $this->version = $version;
        $this->diagnostics = $diagnostics;
    }

    /**
     * @param array<string,mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'diagnostics' => ['names' => [Diagnostic::class], 'iterable' => true],
        ];

        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                continue;
            }

            if ($map[$key]['iterable']) {
                $value = array_map(function ($object) use ($map, $key) {
                    if (!is_array($object)) {
                        return $object;
                    }

                    return self::invokeFromNames($map[$key]['names'], $object) ?: $object;
                }, $value);
                continue;
            }

            $names = $map[$key]['names'];
            $value = self::invokeFromNames($names, $value) ?: $value;
        }
        
        return Invoke::new(self::class, $array);
    }

    /**
     * @param array<string> $classNames
     * @param array<string,mixed> $object
     */
    private static function invokeFromNames(array $classNames, array $object): ?object
    {
        foreach ($classNames as $className) {
            try {
                // @phpstan-ignore-next-line
                return call_user_func_array($className . '::fromArray', [$object]);
            } catch (Exception $e) {
                continue;
            }
        }

        return null;
    }
        
}