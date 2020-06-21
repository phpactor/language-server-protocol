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