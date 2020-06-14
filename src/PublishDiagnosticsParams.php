<?php

namespace LanguageServerProtocol;

class PublishDiagnosticsParams
{
    /**
     * The URI for which diagnostic information is reported.
     *
     * @var DocumentUri
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

    public function __construct(DocumentUri $uri, int $version, array $diagnostics)
    {
        $this->$uri = $this->$uri;
        $this->$version = $this->$version;
        $this->$diagnostics = $this->$diagnostics;
    }
}