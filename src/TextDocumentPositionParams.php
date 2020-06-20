<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * A parameter literal used in requests to pass a text document and a position inside that
 * document.
 */
class TextDocumentPositionParams
{
    /**
     * The text document.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The position inside the text document.
     *
     * @var Position
     */
    public $position;

    /**
     * @param TextDocumentIdentifier $textDocument
     * @param Position $position
     */
    public function __construct(TextDocumentIdentifier $textDocument, Position $position)
    {
        $this->textDocument = $textDocument;
        $this->position = $position;
    }
}