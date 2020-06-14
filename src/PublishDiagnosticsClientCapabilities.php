<?php

namespace LanguageServerProtocol;

class PublishDiagnosticsClientCapabilities
{
    /**
     * Whether the clients accepts diagnostics with related information.
     *
     * @var string
     */
    public $relatedInformation;

    /**
     * Client supports the tag property to provide meta data about a diagnostic.
     * Clients supporting tags have to handle unknown tags gracefully.
     *
     * @var 
     */
    public $tagSupport;

    /**
     * Whether the client interprets the version property of the
     * `textDocument/publishDiagnostics` notification`s parameter.
     *
     * @var string
     */
    public $versionSupport;

    public function __construct(string $relatedInformation, null $tagSupport, string $versionSupport)
    {
        $this->$relatedInformation = $this->$relatedInformation;
        $this->$tagSupport = $this->$tagSupport;
        $this->$versionSupport = $this->$versionSupport;
    }
}