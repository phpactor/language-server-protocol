<?php

namespace LanguageServerProtocol;

/**
 * Defines the capabilities provided by the client.
 */
class _ClientCapabilities
{
    /**
     * Workspace specific client capabilities.
     *
     * @var WorkspaceClientCapabilities|null
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
     * @var object|null
     */
    public $window;

    /**
     * Experimental client capabilities.
     *
     * @var object|null
     */
    public $experimental;

    /**
     * @param WorkspaceClientCapabilities|null $workspace
     * @param TextDocumentClientCapabilities|null $textDocument
     * @param object|null $window
     * @param object|null $experimental
     */
    public function __construct(?WorkspaceClientCapabilities $workspace, ?TextDocumentClientCapabilities $textDocument, ?object $window, ?object $experimental)
    {
        $this->workspace = $workspace;
        $this->textDocument = $textDocument;
        $this->window = $window;
        $this->experimental = $experimental;
    }
}