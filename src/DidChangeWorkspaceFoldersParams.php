<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * The parameters of a `workspace/didChangeWorkspaceFolders` notification.
 */
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

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}