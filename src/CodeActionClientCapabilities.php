<?php

namespace LanguageServerProtocol;

class CodeActionClientCapabilities
{
    /**
     * Whether code action supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    /**
     * The client support code action literals as a valid
     * response of the `textDocument/codeAction` request.
     *
     * @var array<mixed>
     */
    public $codeActionLiteralSupport;

    /**
     * Whether code action supports the `isPreferred` property.
     *
     * @var string
     */
    public $isPreferredSupport;

    /**
     * @param string $dynamicRegistration
     * @param array<mixed> $codeActionLiteralSupport
     * @param string $isPreferredSupport
     */
    public function __construct(string $dynamicRegistration, $codeActionLiteralSupport, string $isPreferredSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->codeActionLiteralSupport = $codeActionLiteralSupport;
        $this->isPreferredSupport = $isPreferredSupport;
    }
}