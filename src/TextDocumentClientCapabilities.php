<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

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
     * Capabilities specific to `textDocument/foldingRange` request.
     *
     * @var FoldingRangeClientCapabilities|null
     */
    public $foldingRange;

    /**
     * Capabilities specific to `textDocument/selectionRange` request.
     *
     * @var SelectionRangeClientCapabilities|null
     */
    public $selectionRange;

    /**
     * Capabilities specific to `textDocument/publishDiagnostics` notification.
     *
     * @var PublishDiagnosticsClientCapabilities|null
     */
    public $publishDiagnostics;

    /**
     * Capabilities specific to the various call hierarchy request.
     *
     * @var CallHierarchyClientCapabilities|null
     */
    public $callHierarchy;

    /**
     * Capabilities specific to the various semantic token request.
     *
     * @var SemanticTokensClientCapabilities|null
     */
    public $semanticTokens;

    /**
     * Capabilities specific to the linked editing range request.
     *
     * @var LinkedEditingRangeClientCapabilities|null
     */
    public $linkedEditingRange;

    /**
     * Client capabilities specific to the moniker request.
     *
     * @var MonikerClientCapabilities
     */
    public $moniker;

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
     * @param CallHierarchyClientCapabilities|null $callHierarchy
     * @param SemanticTokensClientCapabilities|null $semanticTokens
     * @param LinkedEditingRangeClientCapabilities|null $linkedEditingRange
     * @param MonikerClientCapabilities $moniker
     */
    public function __construct(MonikerClientCapabilities $moniker, ?TextDocumentSyncClientCapabilities $synchronization = null, ?CompletionClientCapabilities $completion = null, ?HoverClientCapabilities $hover = null, ?SignatureHelpClientCapabilities $signatureHelp = null, ?DeclarationClientCapabilities $declaration = null, ?DefinitionClientCapabilities $definition = null, ?TypeDefinitionClientCapabilities $typeDefinition = null, ?ImplementationClientCapabilities $implementation = null, ?ReferenceClientCapabilities $references = null, ?DocumentHighlightClientCapabilities $documentHighlight = null, ?DocumentSymbolClientCapabilities $documentSymbol = null, ?CodeActionClientCapabilities $codeAction = null, ?CodeLensClientCapabilities $codeLens = null, ?DocumentLinkClientCapabilities $documentLink = null, ?DocumentColorClientCapabilities $colorProvider = null, ?DocumentFormattingClientCapabilities $formatting = null, ?DocumentRangeFormattingClientCapabilities $rangeFormatting = null, ?DocumentOnTypeFormattingClientCapabilities $onTypeFormatting = null, ?RenameClientCapabilities $rename = null, ?FoldingRangeClientCapabilities $foldingRange = null, ?SelectionRangeClientCapabilities $selectionRange = null, ?PublishDiagnosticsClientCapabilities $publishDiagnostics = null, ?CallHierarchyClientCapabilities $callHierarchy = null, ?SemanticTokensClientCapabilities $semanticTokens = null, ?LinkedEditingRangeClientCapabilities $linkedEditingRange = null)
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
        $this->callHierarchy = $callHierarchy;
        $this->semanticTokens = $semanticTokens;
        $this->linkedEditingRange = $linkedEditingRange;
        $this->moniker = $moniker;
    }

    /**
     * @param array<string,mixed> $array
     * @return static
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'synchronization' => ['names' => [TextDocumentSyncClientCapabilities::class], 'iterable' => false],
            'completion' => ['names' => [CompletionClientCapabilities::class], 'iterable' => false],
            'hover' => ['names' => [HoverClientCapabilities::class], 'iterable' => false],
            'signatureHelp' => ['names' => [SignatureHelpClientCapabilities::class], 'iterable' => false],
            'declaration' => ['names' => [DeclarationClientCapabilities::class], 'iterable' => false],
            'definition' => ['names' => [DefinitionClientCapabilities::class], 'iterable' => false],
            'typeDefinition' => ['names' => [TypeDefinitionClientCapabilities::class], 'iterable' => false],
            'implementation' => ['names' => [ImplementationClientCapabilities::class], 'iterable' => false],
            'references' => ['names' => [ReferenceClientCapabilities::class], 'iterable' => false],
            'documentHighlight' => ['names' => [DocumentHighlightClientCapabilities::class], 'iterable' => false],
            'documentSymbol' => ['names' => [DocumentSymbolClientCapabilities::class], 'iterable' => false],
            'codeAction' => ['names' => [CodeActionClientCapabilities::class], 'iterable' => false],
            'codeLens' => ['names' => [CodeLensClientCapabilities::class], 'iterable' => false],
            'documentLink' => ['names' => [DocumentLinkClientCapabilities::class], 'iterable' => false],
            'colorProvider' => ['names' => [DocumentColorClientCapabilities::class], 'iterable' => false],
            'formatting' => ['names' => [DocumentFormattingClientCapabilities::class], 'iterable' => false],
            'rangeFormatting' => ['names' => [DocumentRangeFormattingClientCapabilities::class], 'iterable' => false],
            'onTypeFormatting' => ['names' => [DocumentOnTypeFormattingClientCapabilities::class], 'iterable' => false],
            'rename' => ['names' => [RenameClientCapabilities::class], 'iterable' => false],
            'foldingRange' => ['names' => [FoldingRangeClientCapabilities::class], 'iterable' => false],
            'selectionRange' => ['names' => [SelectionRangeClientCapabilities::class], 'iterable' => false],
            'publishDiagnostics' => ['names' => [PublishDiagnosticsClientCapabilities::class], 'iterable' => false],
            'callHierarchy' => ['names' => [CallHierarchyClientCapabilities::class], 'iterable' => false],
            'semanticTokens' => ['names' => [SemanticTokensClientCapabilities::class], 'iterable' => false],
            'linkedEditingRange' => ['names' => [LinkedEditingRangeClientCapabilities::class], 'iterable' => false],
            'moniker' => ['names' => [MonikerClientCapabilities::class], 'iterable' => false],
        ];

        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                if ($allowUnknownKeys) {
                    unset($array[$key]);
                    continue;
                }

                throw new RuntimeException(sprintf(
                    'Parameter "%s" on class "%s" not known, known parameters: "%s"',
                    $key, 
                    self::class,
                    implode('", "', array_keys($map))
                ));
            }

            // from here we only care about arrays that can be transformed into
            // objects
            if (!is_array($value)) {
                continue;
            }

            if (empty($map[$key]['names'])) {
                continue;
            }

            if ($map[$key]['iterable']) {
                $value = array_map(function ($object) use ($map, $key, $allowUnknownKeys) {
                    if (!is_array($object)) {
                        return $object;
                    }

                    return self::invokeFromNames($map[$key]['names'], $object, $allowUnknownKeys) ?: $object;
                }, $value);
                continue;
            }

            $names = $map[$key]['names'];
            $value = self::invokeFromNames($names, $value, $allowUnknownKeys) ?: $value;
        }
        
        return Invoke::new(self::class, $array);
    }

    /**
     * @param array<string> $classNames
     * @param array<string,mixed> $object
     */
    private static function invokeFromNames(array $classNames, array $object, bool $allowUnknownKeys): ?object
    {
        $lastException = null;
        foreach ($classNames as $className) {
            try {
                // @phpstan-ignore-next-line
                return call_user_func_array($className . '::fromArray', [$object, $allowUnknownKeys]);
            } catch (Exception $exception) {
                $lastException = $exception;
                continue;
            }
        }

        throw $lastException;
    }
        
}