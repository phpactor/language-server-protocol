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
     * @var type literal ...
     */
    public $completionItem;

    /**
     *
     * @var type literal ...
     */
    public $completionItemKind;

    /**
     * The client supports to send additional context information for a
     * `textDocument/completion` requestion.
     *
     * @var string
     */
    public $contextSupport;

    public function __construct(string $dynamicRegistration, null $completionItem, null $completionItemKind, string $contextSupport)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->completionItem = $completionItem;
        $this->completionItemKind = $completionItemKind;
        $this->contextSupport = $contextSupport;
    }
}