<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentPositionParams, WorkDoneProgressParams
 */
class SignatureHelpParams
{
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
     * The signature help context. This is only available if the client specifies
     * to send this using the client capability `textDocument.signatureHelp.contextSupport === true`
     *
     * @var SignatureHelpContext|null
     */
    public $context;

    /**
     * @param int|string|null $workDoneToken
     * @param TextDocumentIdentifier $textDocument
     * @param Position $position
     * @param SignatureHelpContext|null $context
     */
    public function __construct($workDoneToken, TextDocumentIdentifier $textDocument, Position $position, ?SignatureHelpContext $context)
    {
        $this->workDoneToken = $workDoneToken;
        $this->textDocument = $textDocument;
        $this->position = $position;
        $this->context = $context;
    }
}