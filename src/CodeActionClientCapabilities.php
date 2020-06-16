<?php

namespace LanguageServerProtocol;

class CodeActionClientCapabilities
{
    /**
     * Whether code action supports dynamic registration.
     *
     * @var string|null
     */
    public $dynamicRegistration;

    /**
     * The client support code action literals as a valid
     * response of the `textDocument/codeAction` request.
     *
     * @var array<mixed>|null
     */
    public $codeActionLiteralSupport;

    /**
     * Whether code action supports the `isPreferred` property.
     *
     * @var string|null
     */
    public $isPreferredSupport;

    /**
     * @param string|null $dynamicRegistration
     * @param array<mixed>|null $codeActionLiteralSupport
     * @param string|null $isPreferredSupport
     */
    public function __construct(?string $dynamicRegistration, $codeActionLiteralSupport, ?string $isPreferredSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->codeActionLiteralSupport = $codeActionLiteralSupport;
        $this->isPreferredSupport = $isPreferredSupport;
    }
}