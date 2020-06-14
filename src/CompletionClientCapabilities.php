<?php

namespace LanguageServerProtocol;

class CompletionClientCapabilities
{
    /**
     * Whether completion supports dynamic registration.
     *
     * @var string|null
     */
    public $dynamicRegistration;

    /**
     * The client supports the following `CompletionItem` specific
     * capabilities.
     *
     * @var array<mixed>|null
     */
    public $completionItem;

    /**
     *
     * @var array<mixed>|null
     */
    public $completionItemKind;

    /**
     * The client supports to send additional context information for a
     * `textDocument/completion` requestion.
     *
     * @var string|null
     */
    public $contextSupport;

    /**
     * @param string|null $dynamicRegistration
     * @param array<mixed>|null $completionItem
     * @param array<mixed>|null $completionItemKind
     * @param string|null $contextSupport
     */
    public function __construct(?string $dynamicRegistration, $completionItem, $completionItemKind, ?string $contextSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->completionItem = $completionItem;
        $this->completionItemKind = $completionItemKind;
        $this->contextSupport = $contextSupport;
    }
}