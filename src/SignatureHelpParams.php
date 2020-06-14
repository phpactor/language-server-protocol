<?php

namespace LanguageServerProtocol;

class SignatureHelpParams
{
    /**
     * The signature help context. This is only available if the client specifies
     * to send this using the client capability `textDocument.signatureHelp.contextSupport === true`
     *
     * @var SignatureHelpContext
     */
    public $context;

    public function __construct(SignatureHelpContext $context)
    {
        $this->$context = $this->$context;
    }
}