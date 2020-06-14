<?php

namespace LanguageServerProtocol;

class SignatureHelpClientCapabilities
{
    /**
     * Whether signature help supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    /**
     * The client supports the following `SignatureInformation`
     * specific properties.
     *
     * @var 
     */
    public $signatureInformation;

    /**
     * The client supports to send additional context information for a
     * `textDocument/signatureHelp` request. A client that opts into
     * contextSupport will also support the `retriggerCharacters` on
     * `SignatureHelpOptions`.
     *
     * @var string
     */
    public $contextSupport;

    public function __construct(string $dynamicRegistration, null $signatureInformation, string $contextSupport)
    {
        $this->$dynamicRegistration = $this->$dynamicRegistration;
        $this->$signatureInformation = $this->$signatureInformation;
        $this->$contextSupport = $this->$contextSupport;
    }
}