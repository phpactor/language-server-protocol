<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

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

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
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