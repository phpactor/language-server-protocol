<?php

namespace LanguageServerProtocol;

class CompletionClientCapabilities
{
    /**
     * Whether completion supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    /**
     * The client supports the following `CompletionItem` specific
     * capabilities.
     *
     * @var array<mixed>
     */
    public $completionItem;

    /**
     *
     * @var array<mixed>
     */
    public $completionItemKind;

    /**
     * The client supports to send additional context information for a
     * `textDocument/completion` requestion.
     *
     * @var string
     */
    public $contextSupport;

    /**
     * @param string $dynamicRegistration
     * @param array<mixed> $completionItem
     * @param array<mixed> $completionItemKind
     * @param string $contextSupport
     */
    public function __construct(string $dynamicRegistration, $completionItem, $completionItemKind, string $contextSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->completionItem = $completionItem;
        $this->completionItemKind = $completionItemKind;
        $this->contextSupport = $contextSupport;
    }
}