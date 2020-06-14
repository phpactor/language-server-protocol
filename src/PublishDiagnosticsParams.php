<?php

namespace LanguageServerProtocol;

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
     * @var int
     */
    public $version;

    /**
     * An array of diagnostic information items.
     *
     * @var array<Diagnostic>
     */
    public $diagnostics;

    public function __construct(string $uri, int $version, array $diagnostics)
    {
        $this->uri = $uri;
        $this->version = $version;
        $this->diagnostics = $diagnostics;
    }
}