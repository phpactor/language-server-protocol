<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * The workspace folder change event.
 */
class WorkspaceFoldersChangeEvent
{
    /**
     * The array of added workspace folders
     *
     * @var array<WorkspaceFolder>
     */
    public $added;

    /**
     * The array of the removed workspace folders
     *
     * @var array<WorkspaceFolder>
     */
    public $removed;

    /**
     * @param array<WorkspaceFolder> $added
     * @param array<WorkspaceFolder> $removed
     */
    public function __construct(array $added, array $removed)
    {
        $this->added = $added;
        $this->removed = $removed;
    }
}