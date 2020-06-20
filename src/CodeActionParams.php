<?php

namespace LanguageServerProtocol;

/**
 * The parameters of a [CodeActionRequest](#CodeActionRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams, PartialResultParams
 */
class CodeActionParams
{
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
     * @param TextDocumentIdentifier $textDocument
     * @param Range $range
     * @param CodeActionContext $context
     * @param int|string|null $workDoneToken
     * @param int|string|null $partialResultToken
     */
    public function __construct(CodeActionContext $context, Range $range, TextDocumentIdentifier $textDocument, $workDoneToken, $partialResultToken)
    {
        $this->textDocument = $textDocument;
        $this->range = $range;
        $this->context = $context;
        $this->workDoneToken = $workDoneToken;
        $this->partialResultToken = $partialResultToken;
    }
}