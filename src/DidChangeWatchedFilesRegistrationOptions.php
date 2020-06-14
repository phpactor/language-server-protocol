<?php

namespace LanguageServerProtocol;

class DidChangeWatchedFilesRegistrationOptions
{
    /**
     * The watchers to register.
     *
     * @var array<FileSystemWatcher>
     */
    public $watchers;

    /**
     * @param array<FileSystemWatcher> $watchers
     */
    public function __construct(array $watchers)
    {
        $this->watchers = $watchers;
    }
}