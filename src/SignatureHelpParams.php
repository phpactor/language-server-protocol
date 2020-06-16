<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentPositionParams, WorkDoneProgressParams
 */
class SignatureHelpParams
{
    /**
     * The signature help context. This is only available if the client specifies
     * to send this using the client capability `textDocument.signatureHelp.contextSupport === true`
     *
     * @var SignatureHelpContext|null
     */
    public $context;

    /**
     * @param SignatureHelpContext|null $context
     */
    public function __construct(?SignatureHelpContext $context)
    {
        $this->context = $context;
    }
}