<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams, PartialResultParams
 */
class DocumentLinkParams
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
     * The document to provide document links for.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * @param int|string|null $partialResultToken
     * @param int|string|null $workDoneToken
     * @param TextDocumentIdentifier $textDocument
     */
    public function __construct($partialResultToken, $workDoneToken, TextDocumentIdentifier $textDocument)
    {
        $this->partialResultToken = $partialResultToken;
        $this->workDoneToken = $workDoneToken;
        $this->textDocument = $textDocument;
    }
}