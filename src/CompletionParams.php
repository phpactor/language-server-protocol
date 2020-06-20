<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Completion parameters
 *
 * Mixins (implemented TS interfaces): TextDocumentPositionParams, WorkDoneProgressParams, PartialResultParams
 */
class CompletionParams
{
    /**
     * The completion context. This is only available it the client specifies
     * to send this using the client capability `textDocument.completion.contextSupport === true`
     *
     * @var CompletionContext|null
     */
    public $context;

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
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

    /**
     * An optional token that a server can use to report partial results (e.g. streaming) to
     * the client.
     *
     * @var int|string|null
     */
    public $partialResultToken;

    /**
     * @param CompletionContext|null $context
     * @param TextDocumentIdentifier $textDocument
     * @param Position $position
     * @param int|string|null $workDoneToken
     * @param int|string|null $partialResultToken
     */
    public function __construct(TextDocumentIdentifier $textDocument, Position $position, ?CompletionContext $context = null, $workDoneToken = null, $partialResultToken = null)
    {
        $this->context = $context;
        $this->textDocument = $textDocument;
        $this->position = $position;
        $this->workDoneToken = $workDoneToken;
        $this->partialResultToken = $partialResultToken;
    }
}