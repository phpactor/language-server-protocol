<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

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