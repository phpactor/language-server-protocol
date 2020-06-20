<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * The parameters send in a will save text document notification.
 */
class WillSaveTextDocumentParams
{
    /**
     * The document that will be saved.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The 'TextDocumentSaveReason'.
     *
     * @var 1|2|3
     */
    public $reason;

    /**
     * @param TextDocumentIdentifier $textDocument
     * @param 1|2|3 $reason
     */
    public function __construct(TextDocumentIdentifier $textDocument, $reason)
    {
        $this->textDocument = $textDocument;
        $this->reason = $reason;
    }
}