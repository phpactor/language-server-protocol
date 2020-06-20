<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams, PartialResultParams
 */
class CodeActionParams
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
     * The document in which the command was invoked.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The range for which the command was invoked.
     *
     * @var Range
     */
    public $range;

    /**
     * Context carrying additional information.
     *
     * @var CodeActionContext
     */
    public $context;

    /**
     * @param int|string|null $partialResultToken
     * @param int|string|null $workDoneToken
     * @param TextDocumentIdentifier $textDocument
     * @param Range $range
     * @param CodeActionContext $context
     */
    public function __construct($partialResultToken, $workDoneToken, TextDocumentIdentifier $textDocument, Range $range, CodeActionContext $context)
    {
        $this->partialResultToken = $partialResultToken;
        $this->workDoneToken = $workDoneToken;
        $this->textDocument = $textDocument;
        $this->range = $range;
        $this->context = $context;
    }
}