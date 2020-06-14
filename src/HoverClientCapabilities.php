<?php

namespace LanguageServerProtocol;

class HoverClientCapabilities
{
    /**
     * Whether hover supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    /**
     * Client supports the follow content formats for the content
     * property. The order describes the preferred format of the client.
     *
     * @var array<'plaintext'|'markdown'>
     */
    public $contentFormat;

    /**
     * @param string $dynamicRegistration
     * @param array<'plaintext'|'markdown'> $contentFormat
     */
    public function __construct(string $dynamicRegistration, array $contentFormat)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->contentFormat = $contentFormat;
    }
}