<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Defines the capabilities provided by a language
 * server.
 */
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
     * @var bool|HoverOptions|null
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
     * @var bool|DeclarationOptions|DeclarationRegistrationOptions|null
     */
    public $declarationProvider;

    /**
     * The server provides goto definition support.
     *
     * @var bool|DefinitionOptions|null
     */
    public $definitionProvider;

    /**
     * The server provides Goto Type Definition support.
     *
     * @var bool|TypeDefinitionOptions|TypeDefinitionRegistrationOptions|null
     */
    public $typeDefinitionProvider;

    /**
     * The server provides Goto Implementation support.
     *
     * @var bool|ImplementationOptions|ImplementationRegistrationOptions|null
     */
    public $implementationProvider;

    /**
     * The server provides find references support.
     *
     * @var bool|ReferenceOptions|null
     */
    public $referencesProvider;

    /**
     * The server provides document highlight support.
     *
     * @var bool|DocumentHighlightOptions|null
     */
    public $documentHighlightProvider;

    /**
     * The server provides document symbol support.
     *
     * @var bool|DocumentSymbolOptions|null
     */
    public $documentSymbolProvider;

    /**
     * The server provides code actions. CodeActionOptions may only be
     * specified if the client states that it supports
     * `codeActionLiteralSupport` in its initial `initialize` request.
     *
     * @var bool|CodeActionOptions|null
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
     * @var bool|DocumentColorOptions|DocumentColorRegistrationOptions|null
     */
    public $colorProvider;

    /**
     * The server provides workspace symbol support.
     *
     * @var bool|WorkspaceSymbolOptions|null
     */
    public $workspaceSymbolProvider;

    /**
     * The server provides document formatting.
     *
     * @var bool|DocumentFormattingOptions|null
     */
    public $documentFormattingProvider;

    /**
     * The server provides document range formatting.
     *
     * @var bool|DocumentRangeFormattingOptions|null
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
     * @var bool|RenameOptions|null
     */
    public $renameProvider;

    /**
     * The server provides folding provider support.
     *
     * @var bool|FoldingRangeOptions|FoldingRangeRegistrationOptions|null
     */
    public $foldingRangeProvider;

    /**
     * The server provides selection range support.
     *
     * @var bool|SelectionRangeOptions|SelectionRangeRegistrationOptions|null
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
     * @var mixed|null
     */
    public $experimental;

    /**
     * @param TextDocumentSyncOptions|0|1|2|null $textDocumentSync
     * @param CompletionOptions|null $completionProvider
     * @param bool|HoverOptions|null $hoverProvider
     * @param SignatureHelpOptions|null $signatureHelpProvider
     * @param bool|DeclarationOptions|DeclarationRegistrationOptions|null $declarationProvider
     * @param bool|DefinitionOptions|null $definitionProvider
     * @param bool|TypeDefinitionOptions|TypeDefinitionRegistrationOptions|null $typeDefinitionProvider
     * @param bool|ImplementationOptions|ImplementationRegistrationOptions|null $implementationProvider
     * @param bool|ReferenceOptions|null $referencesProvider
     * @param bool|DocumentHighlightOptions|null $documentHighlightProvider
     * @param bool|DocumentSymbolOptions|null $documentSymbolProvider
     * @param bool|CodeActionOptions|null $codeActionProvider
     * @param CodeLensOptions|null $codeLensProvider
     * @param DocumentLinkOptions|null $documentLinkProvider
     * @param bool|DocumentColorOptions|DocumentColorRegistrationOptions|null $colorProvider
     * @param bool|WorkspaceSymbolOptions|null $workspaceSymbolProvider
     * @param bool|DocumentFormattingOptions|null $documentFormattingProvider
     * @param bool|DocumentRangeFormattingOptions|null $documentRangeFormattingProvider
     * @param DocumentOnTypeFormattingOptions|null $documentOnTypeFormattingProvider
     * @param bool|RenameOptions|null $renameProvider
     * @param bool|FoldingRangeOptions|FoldingRangeRegistrationOptions|null $foldingRangeProvider
     * @param bool|SelectionRangeOptions|SelectionRangeRegistrationOptions|null $selectionRangeProvider
     * @param ExecuteCommandOptions|null $executeCommandProvider
     * @param mixed|null $experimental
     */
    public function __construct($textDocumentSync = null, ?CompletionOptions $completionProvider = null, $hoverProvider = null, ?SignatureHelpOptions $signatureHelpProvider = null, $declarationProvider = null, $definitionProvider = null, $typeDefinitionProvider = null, $implementationProvider = null, $referencesProvider = null, $documentHighlightProvider = null, $documentSymbolProvider = null, $codeActionProvider = null, ?CodeLensOptions $codeLensProvider = null, ?DocumentLinkOptions $documentLinkProvider = null, $colorProvider = null, $workspaceSymbolProvider = null, $documentFormattingProvider = null, $documentRangeFormattingProvider = null, ?DocumentOnTypeFormattingOptions $documentOnTypeFormattingProvider = null, $renameProvider = null, $foldingRangeProvider = null, $selectionRangeProvider = null, ?ExecuteCommandOptions $executeCommandProvider = null, $experimental = null)
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

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'textDocumentSync' => [TextDocumentSyncOptions::class, TextDocumentSyncKind::class],
            'completionProvider' => [CompletionOptions::class],
            'hoverProvider' => [HoverOptions::class],
            'signatureHelpProvider' => [SignatureHelpOptions::class],
            'declarationProvider' => [DeclarationOptions::class, DeclarationRegistrationOptions::class],
            'definitionProvider' => [DefinitionOptions::class],
            'typeDefinitionProvider' => [TypeDefinitionOptions::class, TypeDefinitionRegistrationOptions::class],
            'implementationProvider' => [ImplementationOptions::class, ImplementationRegistrationOptions::class],
            'referencesProvider' => [ReferenceOptions::class],
            'documentHighlightProvider' => [DocumentHighlightOptions::class],
            'documentSymbolProvider' => [DocumentSymbolOptions::class],
            'codeActionProvider' => [CodeActionOptions::class],
            'codeLensProvider' => [CodeLensOptions::class],
            'documentLinkProvider' => [DocumentLinkOptions::class],
            'colorProvider' => [DocumentColorOptions::class, DocumentColorRegistrationOptions::class],
            'workspaceSymbolProvider' => [WorkspaceSymbolOptions::class],
            'documentFormattingProvider' => [DocumentFormattingOptions::class],
            'documentRangeFormattingProvider' => [DocumentRangeFormattingOptions::class],
            'documentOnTypeFormattingProvider' => [DocumentOnTypeFormattingOptions::class],
            'renameProvider' => [RenameOptions::class],
            'foldingRangeProvider' => [FoldingRangeOptions::class, FoldingRangeRegistrationOptions::class],
            'selectionRangeProvider' => [SelectionRangeOptions::class, SelectionRangeRegistrationOptions::class],
            'executeCommandProvider' => [ExecuteCommandOptions::class],
        ];
        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                continue;
            }
            foreach ($map[$key] as $className) {
               try {
                   $value = Invoke::new($className, $value);
                   continue;
               } catch (Exception $e) {
                   continue;
               }
            }
        }
        return Invoke::new(self::class, $array);
    }
        
}