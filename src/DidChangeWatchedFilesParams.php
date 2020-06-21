<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * The watched files change notification's parameters.
 */
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

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}