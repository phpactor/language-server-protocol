<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Rename file operation
 *
 * Mixins (implemented TS interfaces): ResourceOperation
 */
class RenameFile
{
    /**
     *
     * @var string
     */
    public $kind;

    /**
     * The old (existing) location.
     *
     * @var string
     */
    public $oldUri;

    /**
     * The new location.
     *
     * @var string
     */
    public $newUri;

    /**
     * Rename options.
     *
     * @var RenameFileOptions|null
     */
    public $options;

    /**
     * @param string $kind
     * @param string $oldUri
     * @param string $newUri
     * @param RenameFileOptions|null $options
     */
    public function __construct(string $kind, string $oldUri, string $newUri, ?RenameFileOptions $options = null)
    {
        $this->kind = $kind;
        $this->oldUri = $oldUri;
        $this->newUri = $newUri;
        $this->options = $options;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'options' => [RenameFileOptions::class],
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