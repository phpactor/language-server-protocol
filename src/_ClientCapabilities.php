<?php

namespace LanguageServerProtocol;

class _ClientCapabilities
{
    /**
     * Workspace specific client capabilities.
     *
     * @var WorkspaceClientCapabilities
     */
    public $workspace;

    /**
     * Text document specific client capabilities.
     *
     * @var TextDocumentClientCapabilities
     */
    public $textDocument;

    /**
     * Window specific client capabilities.
     *
     * @var object
     */
    public $window;

    /**
     * Experimental client capabilities.
     *
     * @var object
     */
    public $experimental;

    public function __construct(WorkspaceClientCapabilities $workspace, TextDocumentClientCapabilities $textDocument, object $window, object $experimental)
    {
        $this->workspace = $workspace;
        $this->textDocument = $textDocument;
        $this->window = $window;
        $this->experimental = $experimental;
    }
}