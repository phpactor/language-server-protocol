<?php

namespace LanguageServerProtocol;

class _ServerCapabilities
{
    /**
     * Defines how text documents are synced. Is either a detailed structure defining each notification or
     * for backwards compatibility the TextDocumentSyncKind number.
     *
     * @var TextDocumentSyncOptions|0|1|2|null
     */
    public $textDocumentSync;

    /**
     * The server provides completion support.
     *
     * @var CompletionOptions|null
     */
    public $completionProvider;

    /**
     * The server provides hover support.
     *
     * @var string|HoverOptions|null
     */
    public $hoverProvider;

    /**
     * The server provides signature help support.
     *
     * @var SignatureHelpOptions|null
     */
    public $signatureHelpProvider;

    /**
     * The server provides Goto Declaration support.
     *
     * @var string|DeclarationOptions|DeclarationRegistrationOptions|null
     */
    public $declarationProvider;

    /**
     * The server provides goto definition support.
     *
     * @var string|DefinitionOptions|null
     */
    public $definitionProvider;

    /**
     * The server provides Goto Type Definition support.
     *
     * @var string|TypeDefinitionOptions|TypeDefinitionRegistrationOptions|null
     */
    public $typeDefinitionProvider;

    /**
     * The server provides Goto Implementation support.
     *
     * @var string|ImplementationOptions|ImplementationRegistrationOptions|null
     */
    public $implementationProvider;

    /**
     * The server provides find references support.
     *
     * @var string|ReferenceOptions|null
     */
    public $referencesProvider;

    /**
     * The server provides document highlight support.
     *
     * @var string|DocumentHighlightOptions|null
     */
    public $documentHighlightProvider;

    /**
     * The server provides document symbol support.
     *
     * @var string|DocumentSymbolOptions|null
     */
    public $documentSymbolProvider;

    /**
     * The server provides code actions. CodeActionOptions may only be
     * specified if the client states that it supports
     * `codeActionLiteralSupport` in its initial `initialize` request.
     *
     * @var string|CodeActionOptions|null
     */
    public $codeActionProvider;

    /**
     * The server provides code lens.
     *
     * @var CodeLensOptions|null
     */
    public $codeLensProvider;

    /**
     * The server provides document link support.
     *
     * @var DocumentLinkOptions|null
     */
    public $documentLinkProvider;

    /**
     * The server provides color provider support.
     *
     * @var string|DocumentColorOptions|DocumentColorRegistrationOptions|null
     */
    public $colorProvider;

    /**
     * The server provides workspace symbol support.
     *
     * @var string|WorkspaceSymbolOptions|null
     */
    public $workspaceSymbolProvider;

    /**
     * The server provides document formatting.
     *
     * @var string|DocumentFormattingOptions|null
     */
    public $documentFormattingProvider;

    /**
     * The server provides document range formatting.
     *
     * @var string|DocumentRangeFormattingOptions|null
     */
    public $documentRangeFormattingProvider;

    /**
     * The server provides document formatting on typing.
     *
     * @var DocumentOnTypeFormattingOptions|null
     */
    public $documentOnTypeFormattingProvider;

    /**
     * The server provides rename support. RenameOptions may only be
     * specified if the client states that it supports
     * `prepareSupport` in its initial `initialize` request.
     *
     * @var string|RenameOptions|null
     */
    public $renameProvider;

    /**
     * The server provides folding provider support.
     *
     * @var string|FoldingRangeOptions|FoldingRangeRegistrationOptions|null
     */
    public $foldingRangeProvider;

    /**
     * The server provides selection range support.
     *
     * @var string|SelectionRangeOptions|SelectionRangeRegistrationOptions|null
     */
    public $selectionRangeProvider;

    /**
     * The server provides execute command support.
     *
     * @var ExecuteCommandOptions|null
     */
    public $executeCommandProvider;

    /**
     * Experimental server capabilities.
     *
     * @var T|null
     */
    public $experimental;

    /**
     * @param TextDocumentSyncOptions|0|1|2|null $textDocumentSync
     * @param CompletionOptions|null $completionProvider
     * @param string|HoverOptions|null $hoverProvider
     * @param SignatureHelpOptions|null $signatureHelpProvider
     * @param string|DeclarationOptions|DeclarationRegistrationOptions|null $declarationProvider
     * @param string|DefinitionOptions|null $definitionProvider
     * @param string|TypeDefinitionOptions|TypeDefinitionRegistrationOptions|null $typeDefinitionProvider
     * @param string|ImplementationOptions|ImplementationRegistrationOptions|null $implementationProvider
     * @param string|ReferenceOptions|null $referencesProvider
     * @param string|DocumentHighlightOptions|null $documentHighlightProvider
     * @param string|DocumentSymbolOptions|null $documentSymbolProvider
     * @param string|CodeActionOptions|null $codeActionProvider
     * @param CodeLensOptions|null $codeLensProvider
     * @param DocumentLinkOptions|null $documentLinkProvider
     * @param string|DocumentColorOptions|DocumentColorRegistrationOptions|null $colorProvider
     * @param string|WorkspaceSymbolOptions|null $workspaceSymbolProvider
     * @param string|DocumentFormattingOptions|null $documentFormattingProvider
     * @param string|DocumentRangeFormattingOptions|null $documentRangeFormattingProvider
     * @param DocumentOnTypeFormattingOptions|null $documentOnTypeFormattingProvider
     * @param string|RenameOptions|null $renameProvider
     * @param string|FoldingRangeOptions|FoldingRangeRegistrationOptions|null $foldingRangeProvider
     * @param string|SelectionRangeOptions|SelectionRangeRegistrationOptions|null $selectionRangeProvider
     * @param ExecuteCommandOptions|null $executeCommandProvider
     * @param T|null $experimental
     */
    public function __construct(
        $textDocumentSync,
        ?CompletionOptions $completionProvider,
        $hoverProvider,
        ?SignatureHelpOptions $signatureHelpProvider,
        $declarationProvider,
        $definitionProvider,
        $typeDefinitionProvider,
        $implementationProvider,
        $referencesProvider,
        $documentHighlightProvider,
        $documentSymbolProvider,
        $codeActionProvider,
        ?CodeLensOptions $codeLensProvider,
        ?DocumentLinkOptions $documentLinkProvider,
        $colorProvider,
        $workspaceSymbolProvider,
        $documentFormattingProvider,
        $documentRangeFormattingProvider,
        ?DocumentOnTypeFormattingOptions $documentOnTypeFormattingProvider,
        $renameProvider,
        $foldingRangeProvider,
        $selectionRangeProvider,
        ?ExecuteCommandOptions $executeCommandProvider,
        ?T $experimental
    )
    {
        $this->textDocumentSync = $textDocumentSync;
        $this->completionProvider = $completionProvider;
        $this->hoverProvider = $hoverProvider;
        $this->signatureHelpProvider = $signatureHelpProvider;
        $this->declarationProvider = $declarationProvider;
        $this->definitionProvider = $definitionProvider;
        $this->typeDefinitionProvider = $typeDefinitionProvider;
        $this->implementationProvider = $implementationProvider;
        $this->referencesProvider = $referencesProvider;
        $this->documentHighlightProvider = $documentHighlightProvider;
        $this->documentSymbolProvider = $documentSymbolProvider;
        $this->codeActionProvider = $codeActionProvider;
        $this->codeLensProvider = $codeLensProvider;
        $this->documentLinkProvider = $documentLinkProvider;
        $this->colorProvider = $colorProvider;
        $this->workspaceSymbolProvider = $workspaceSymbolProvider;
        $this->documentFormattingProvider = $documentFormattingProvider;
        $this->documentRangeFormattingProvider = $documentRangeFormattingProvider;
        $this->documentOnTypeFormattingProvider = $documentOnTypeFormattingProvider;
        $this->renameProvider = $renameProvider;
        $this->foldingRangeProvider = $foldingRangeProvider;
        $this->selectionRangeProvider = $selectionRangeProvider;
        $this->executeCommandProvider = $executeCommandProvider;
        $this->experimental = $experimental;
    }
}
