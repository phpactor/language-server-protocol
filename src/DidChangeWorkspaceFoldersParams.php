<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

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
        $map = [
            'event' => [WorkspaceFoldersChangeEvent::class],
        ];
        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                continue;
            }
            foreach ($map[$key] as $className) {
               try {
                   $value = Invoke::new($className, $value);
                   continue;
               } catch (Exception $e) {
                   continue;
               }
            }
        }
        return Invoke::new(self::class, $array);
    }
        
}