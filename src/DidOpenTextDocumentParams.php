<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

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

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}