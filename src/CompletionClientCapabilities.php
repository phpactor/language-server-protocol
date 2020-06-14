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
     * @var 
     */
    public $completionItem;

    /**
     *
     * @var 
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
        $this->$dynamicRegistration = $this->$dynamicRegistration;
        $this->$completionItem = $this->$completionItem;
        $this->$completionItemKind = $this->$completionItemKind;
        $this->$contextSupport = $this->$contextSupport;
    }
}