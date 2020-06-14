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
     * @var array<mixed>
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

    /**
     * @param string $dynamicRegistration
     * @param array<mixed> $signatureInformation
     * @param string $contextSupport
     */
    public function __construct(string $dynamicRegistration, $signatureInformation, string $contextSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->signatureInformation = $signatureInformation;
        $this->contextSupport = $contextSupport;
    }
}