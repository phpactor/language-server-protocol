<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

class ConfigurationClientCapabilities
{
    /**
     * The workspace client capabilities
     *
     * @var array<mixed>|null
     */
    public $workspace;

    /**
     * @param array<mixed>|null $workspace
     */
    public function __construct($workspace = null)
    {
        $this->workspace = $workspace;
    }
}