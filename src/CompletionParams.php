<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentPositionParams, WorkDoneProgressParams, PartialResultParams
 */
class CompletionParams
{
    /**
     * An optional token that a server can use to report partial results (e.g. streaming) to
     * the client.
     *
     * @var int|string|null
     */
    public $partialResultToken;

    /**
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

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
     * The completion context. This is only available it the client specifies
     * to send this using the client capability `textDocument.completion.contextSupport === true`
     *
     * @var CompletionContext|null
     */
    public $context;

    /**
     * @param int|string|null $partialResultToken
     * @param int|string|null $workDoneToken
     * @param TextDocumentIdentifier $textDocument
     * @param Position $position
     * @param CompletionContext|null $context
     */
    public function __construct($partialResultToken, $workDoneToken, TextDocumentIdentifier $textDocument, Position $position, ?CompletionContext $context)
    {
        $this->partialResultToken = $partialResultToken;
        $this->workDoneToken = $workDoneToken;
        $this->textDocument = $textDocument;
        $this->position = $position;
        $this->context = $context;
    }
}