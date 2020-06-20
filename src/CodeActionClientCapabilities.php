<?php

namespace LanguageServerProtocol;

/**
 * The Client Capabilities of a [CodeActionRequest](#CodeActionRequest).
 */
class CodeActionClientCapabilities
{
    /**
     * Whether code action supports dynamic registration.
     *
     * @var bool|null
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
     * @var bool|null
     */
    public $isPreferredSupport;

    /**
     * @param bool|null $dynamicRegistration
     * @param array<mixed>|null $codeActionLiteralSupport
     * @param bool|null $isPreferredSupport
     */
    public function __construct(?bool $dynamicRegistration, $codeActionLiteralSupport, ?bool $isPreferredSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->codeActionLiteralSupport = $codeActionLiteralSupport;
        $this->isPreferredSupport = $isPreferredSupport;
    }
}