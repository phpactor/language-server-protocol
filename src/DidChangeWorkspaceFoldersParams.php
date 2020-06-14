<?php

namespace LanguageServerProtocol;

class DidChangeWorkspaceFoldersParams
{
    /**
     * The actual workspace folder change event.
     *
     * @var WorkspaceFoldersChangeEvent
     */
    public $event;

    /**
     * @param WorkspaceFoldersChangeEvent $event
     */
    public function __construct(WorkspaceFoldersChangeEvent $event)
    {
        $this->event = $event;
    }
}