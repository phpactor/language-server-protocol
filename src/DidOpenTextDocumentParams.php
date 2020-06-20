<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * The parameters send in a open text document notification
 */
class DidOpenTextDocumentParams
{
    /**
     * The document that was opened.
     *
     * @var TextDocumentItem
     */
    public $textDocument;

    /**
     * @param TextDocumentItem $textDocument
     */
    public function __construct(TextDocumentItem $textDocument)
    {
        $this->textDocument = $textDocument;
    }
}