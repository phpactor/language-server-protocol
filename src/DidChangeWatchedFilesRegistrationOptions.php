<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

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