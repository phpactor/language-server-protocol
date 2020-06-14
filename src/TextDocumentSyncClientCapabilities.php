<?php

namespace LanguageServerProtocol;

class TextDocumentSyncClientCapabilities
{
    /**
     * Whether text document synchronization supports dynamic registration.
     *
     * @var string
     */
    public $dynamicRegistration;

    /**
     * The client supports sending will save notifications.
     *
     * @var string
     */
    public $willSave;

    /**
     * The client supports sending a will save request and
     * waits for a response providing text edits which will
     * be applied to the document before it is saved.
     *
     * @var string
     */
    public $willSaveWaitUntil;

    /**
     * The client supports did save notifications.
     *
     * @var string
     */
    public $didSave;

    public function __construct(string $dynamicRegistration, string $willSave, string $willSaveWaitUntil, string $didSave)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->willSave = $willSave;
        $this->willSaveWaitUntil = $willSaveWaitUntil;
        $this->didSave = $didSave;
    }
}