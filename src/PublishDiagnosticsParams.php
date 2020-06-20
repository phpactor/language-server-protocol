<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

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
}