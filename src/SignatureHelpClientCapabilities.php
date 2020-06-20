<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Client Capabilities for a [SignatureHelpRequest](#SignatureHelpRequest).
 */
class SignatureHelpClientCapabilities
{
    /**
     * Whether signature help supports dynamic registration.
     *
     * @var bool|null
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
     * @var bool|null
     */
    public $contextSupport;

    /**
     * @param bool|null $dynamicRegistration
     * @param array<mixed>|null $signatureInformation
     * @param bool|null $contextSupport
     */
    public function __construct(?bool $dynamicRegistration = null, $signatureInformation = null, ?bool $contextSupport = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->signatureInformation = $signatureInformation;
        $this->contextSupport = $contextSupport;
    }
}