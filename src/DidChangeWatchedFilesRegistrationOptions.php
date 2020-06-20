<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Describe options to be used when registered for text document change events.
 */
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