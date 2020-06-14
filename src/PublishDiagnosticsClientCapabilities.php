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
     * @var type literal ...
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
        $this->relatedInformation = $relatedInformation;
        $this->tagSupport = $tagSupport;
        $this->versionSupport = $versionSupport;
    }
}