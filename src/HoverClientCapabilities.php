<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

class HoverClientCapabilities
{
    /**
     * Whether hover supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * Client supports the follow content formats for the content
     * property. The order describes the preferred format of the client.
     *
     * @var array<'plaintext'|'markdown'>|null
     */
    public $contentFormat;

    /**
     * @param bool|null $dynamicRegistration
     * @param array<'plaintext'|'markdown'>|null $contentFormat
     */
    public function __construct(?bool $dynamicRegistration = null, ?array $contentFormat = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->contentFormat = $contentFormat;
    }
}