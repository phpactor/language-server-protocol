<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Client capabilities of a [DocumentFormattingRequest](#DocumentFormattingRequest).
 */
class DocumentFormattingClientCapabilities
{
    /**
     * Whether formatting supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * @param bool|null $dynamicRegistration
     */
    public function __construct(?bool $dynamicRegistration = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
    }
}