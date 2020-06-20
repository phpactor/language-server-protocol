<?php

namespace LanguageServerProtocol;

/**
 * Mixins (implemented TS interfaces): _ClientCapabilities, WorkspaceFoldersClientCapabilities, ConfigurationClientCapabilities, WorkDoneProgressClientCapabilities
 */
class ClientCapabilities
{
    /**
     * The workspace client capabilities
     *
     * @var array<mixed>|null
     */
    public $workspace;

    /**
     * Text document specific client capabilities.
     *
     * @var TextDocumentClientCapabilities|null
     */
    public $textDocument;

    /**
     * Window specific client capabilities.
     *
     * @var array<mixed>|null
     */
    public $window;

    /**
     * Experimental client capabilities.
     *
     * @var object|null
     */
    public $experimental;

    /**
     * @param array<mixed>|null $workspace
     * @param TextDocumentClientCapabilities|null $textDocument
     * @param array<mixed>|null $window
     * @param object|null $experimental
     */
    public function __construct($workspace = null, ?TextDocumentClientCapabilities $textDocument = null, $window = null, ?object $experimental = null)
    {
        $this->workspace = $workspace;
        $this->textDocument = $textDocument;
        $this->window = $window;
        $this->experimental = $experimental;
    }
}