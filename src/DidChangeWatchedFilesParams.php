<?php

namespace LanguageServerProtocol;

class DidChangeWatchedFilesParams
{
    /**
     * The actual file events.
     *
     * @var array<FileEvent>
     */
    public $changes;

    /**
     * @param array<FileEvent> $changes
     */
    public function __construct(array $changes)
    {
        $this->changes = $changes;
    }
}