<?php

namespace LanguageServerProtocol;

class WorkspaceFoldersInitializeParams
{
    /**
     * The actual configured workspace folders.
     *
     * @var array<WorkspaceFolder>|null
     */
    public $workspaceFolders;

    /**
     * @param array<WorkspaceFolder>|null $workspaceFolders
     */
    public function __construct($workspaceFolders = null)
    {
        $this->workspaceFolders = $workspaceFolders;
    }
}