<?php

namespace LanguageServerProtocol;

class SignatureHelpClientCapabilities
{
    /**
     * Whether signature help supports dynamic registration.
     *
     * @var string|null
     */
    public $dynamicRegistration;

    /**
     * The client supports the following `SignatureInformation`
     * specific properties.
     *
     * @var array<mixed>|null
     */
    public $signatureInformation;

    /**
     * The client supports to send additional context information for a
     * `textDocument/signatureHelp` request. A client that opts into
     * contextSupport will also support the `retriggerCharacters` on
     * `SignatureHelpOptions`.
     *
     * @var string|null
     */
    public $contextSupport;

    /**
     * @param string|null $dynamicRegistration
     * @param array<mixed>|null $signatureInformation
     * @param string|null $contextSupport
     */
    public function __construct(?string $dynamicRegistration, $signatureInformation, ?string $contextSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->signatureInformation = $signatureInformation;
        $this->contextSupport = $contextSupport;
    }
}