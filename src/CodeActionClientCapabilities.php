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
     * @var 
     */
    public $codeActionLiteralSupport;

    /**
     * Whether code action supports the `isPreferred` property.
     *
     * @var string
     */
    public $isPreferredSupport;

    public function __construct(string $dynamicRegistration, null $codeActionLiteralSupport, string $isPreferredSupport)
    {
        $this->$dynamicRegistration = $this->$dynamicRegistration;
        $this->$codeActionLiteralSupport = $this->$codeActionLiteralSupport;
        $this->$isPreferredSupport = $this->$isPreferredSupport;
    }
}