<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams, PartialResultParams
 */
class DocumentLinkParams
{
    /**
     * The document to provide document links for.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

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
     * @param int|string|null $workDoneToken
     * @param int|string|null $partialResultToken
     */
    public function __construct(TextDocumentIdentifier $textDocument, $workDoneToken, $partialResultToken)
    {
        $this->textDocument = $textDocument;
        $this->workDoneToken = $workDoneToken;
        $this->partialResultToken = $partialResultToken;
    }
}