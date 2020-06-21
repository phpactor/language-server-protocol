<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

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

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}