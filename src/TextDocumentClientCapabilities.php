<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Text document specific client capabilities.
 */
class TextDocumentClientCapabilities
{
    /**
     * Defines which synchronization capabilities the client supports.
     *
     * @var TextDocumentSyncClientCapabilities|null
     */
    public $synchronization;

    /**
     * Capabilities specific to the `textDocument/completion`
     *
     * @var CompletionClientCapabilities|null
     */
    public $completion;

    /**
     * Capabilities specific to the `textDocument/hover`
     *
     * @var HoverClientCapabilities|null
     */
    public $hover;

    /**
     * Capabilities specific to the `textDocument/signatureHelp`
     *
     * @var SignatureHelpClientCapabilities|null
     */
    public $signatureHelp;

    /**
     * Capabilities specific to the `textDocument/declaration`
     *
     * @var DeclarationClientCapabilities|null
     */
    public $declaration;

    /**
     * Capabilities specific to the `textDocument/definition`
     *
     * @var DefinitionClientCapabilities|null
     */
    public $definition;

    /**
     * Capabilities specific to the `textDocument/typeDefinition`
     *
     * @var TypeDefinitionClientCapabilities|null
     */
    public $typeDefinition;

    /**
     * Capabilities specific to the `textDocument/implementation`
     *
     * @var ImplementationClientCapabilities|null
     */
    public $implementation;

    /**
     * Capabilities specific to the `textDocument/references`
     *
     * @var ReferenceClientCapabilities|null
     */
    public $references;

    /**
     * Capabilities specific to the `textDocument/documentHighlight`
     *
     * @var DocumentHighlightClientCapabilities|null
     */
    public $documentHighlight;

    /**
     * Capabilities specific to the `textDocument/documentSymbol`
     *
     * @var DocumentSymbolClientCapabilities|null
     */
    public $documentSymbol;

    /**
     * Capabilities specific to the `textDocument/codeAction`
     *
     * @var CodeActionClientCapabilities|null
     */
    public $codeAction;

    /**
     * Capabilities specific to the `textDocument/codeLens`
     *
     * @var CodeLensClientCapabilities|null
     */
    public $codeLens;

    /**
     * Capabilities specific to the `textDocument/documentLink`
     *
     * @var DocumentLinkClientCapabilities|null
     */
    public $documentLink;

    /**
     * Capabilities specific to the `textDocument/documentColor`
     *
     * @var DocumentColorClientCapabilities|null
     */
    public $colorProvider;

    /**
     * Capabilities specific to the `textDocument/formatting`
     *
     * @var DocumentFormattingClientCapabilities|null
     */
    public $formatting;

    /**
     * Capabilities specific to the `textDocument/rangeFormatting`
     *
     * @var DocumentRangeFormattingClientCapabilities|null
     */
    public $rangeFormatting;

    /**
     * Capabilities specific to the `textDocument/onTypeFormatting`
     *
     * @var DocumentOnTypeFormattingClientCapabilities|null
     */
    public $onTypeFormatting;

    /**
     * Capabilities specific to the `textDocument/rename`
     *
     * @var RenameClientCapabilities|null
     */
    public $rename;

    /**
     * Capabilities specific to `textDocument/foldingRange` requests.
     *
     * @var FoldingRangeClientCapabilities|null
     */
    public $foldingRange;

    /**
     * Capabilities specific to `textDocument/selectionRange` requests
     *
     * @var SelectionRangeClientCapabilities|null
     */
    public $selectionRange;

    /**
     * Capabilities specific to `textDocument/publishDiagnostics`.
     *
     * @var PublishDiagnosticsClientCapabilities|null
     */
    public $publishDiagnostics;

    /**
     * @param TextDocumentSyncClientCapabilities|null $synchronization
     * @param CompletionClientCapabilities|null $completion
     * @param HoverClientCapabilities|null $hover
     * @param SignatureHelpClientCapabilities|null $signatureHelp
     * @param DeclarationClientCapabilities|null $declaration
     * @param DefinitionClientCapabilities|null $definition
     * @param TypeDefinitionClientCapabilities|null $typeDefinition
     * @param ImplementationClientCapabilities|null $implementation
     * @param ReferenceClientCapabilities|null $references
     * @param DocumentHighlightClientCapabilities|null $documentHighlight
     * @param DocumentSymbolClientCapabilities|null $documentSymbol
     * @param CodeActionClientCapabilities|null $codeAction
     * @param CodeLensClientCapabilities|null $codeLens
     * @param DocumentLinkClientCapabilities|null $documentLink
     * @param DocumentColorClientCapabilities|null $colorProvider
     * @param DocumentFormattingClientCapabilities|null $formatting
     * @param DocumentRangeFormattingClientCapabilities|null $rangeFormatting
     * @param DocumentOnTypeFormattingClientCapabilities|null $onTypeFormatting
     * @param RenameClientCapabilities|null $rename
     * @param FoldingRangeClientCapabilities|null $foldingRange
     * @param SelectionRangeClientCapabilities|null $selectionRange
     * @param PublishDiagnosticsClientCapabilities|null $publishDiagnostics
     */
    public function __construct(?TextDocumentSyncClientCapabilities $synchronization = null, ?CompletionClientCapabilities $completion = null, ?HoverClientCapabilities $hover = null, ?SignatureHelpClientCapabilities $signatureHelp = null, ?DeclarationClientCapabilities $declaration = null, ?DefinitionClientCapabilities $definition = null, ?TypeDefinitionClientCapabilities $typeDefinition = null, ?ImplementationClientCapabilities $implementation = null, ?ReferenceClientCapabilities $references = null, ?DocumentHighlightClientCapabilities $documentHighlight = null, ?DocumentSymbolClientCapabilities $documentSymbol = null, ?CodeActionClientCapabilities $codeAction = null, ?CodeLensClientCapabilities $codeLens = null, ?DocumentLinkClientCapabilities $documentLink = null, ?DocumentColorClientCapabilities $colorProvider = null, ?DocumentFormattingClientCapabilities $formatting = null, ?DocumentRangeFormattingClientCapabilities $rangeFormatting = null, ?DocumentOnTypeFormattingClientCapabilities $onTypeFormatting = null, ?RenameClientCapabilities $rename = null, ?FoldingRangeClientCapabilities $foldingRange = null, ?SelectionRangeClientCapabilities $selectionRange = null, ?PublishDiagnosticsClientCapabilities $publishDiagnostics = null)
    {
        $this->synchronization = $synchronization;
        $this->completion = $completion;
        $this->hover = $hover;
        $this->signatureHelp = $signatureHelp;
        $this->declaration = $declaration;
        $this->definition = $definition;
        $this->typeDefinition = $typeDefinition;
        $this->implementation = $implementation;
        $this->references = $references;
        $this->documentHighlight = $documentHighlight;
        $this->documentSymbol = $documentSymbol;
        $this->codeAction = $codeAction;
        $this->codeLens = $codeLens;
        $this->documentLink = $documentLink;
        $this->colorProvider = $colorProvider;
        $this->formatting = $formatting;
        $this->rangeFormatting = $rangeFormatting;
        $this->onTypeFormatting = $onTypeFormatting;
        $this->rename = $rename;
        $this->foldingRange = $foldingRange;
        $this->selectionRange = $selectionRange;
        $this->publishDiagnostics = $publishDiagnostics;
    }
}