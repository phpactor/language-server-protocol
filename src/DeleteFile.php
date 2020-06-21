<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * Delete file operation
 *
 * Mixins (implemented TS interfaces): ResourceOperation
 */
class DeleteFile
{
    /**
     *
     * @var string
     */
    public $kind;

    /**
     * The file to delete.
     *
     * @var string
     */
    public $uri;

    /**
     * Delete options.
     *
     * @var DeleteFileOptions|null
     */
    public $options;

    /**
     * @param string $kind
     * @param string $uri
     * @param DeleteFileOptions|null $options
     */
    public function __construct(string $kind, string $uri, ?DeleteFileOptions $options = null)
    {
        $this->kind = $kind;
        $this->uri = $uri;
        $this->options = $options;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'options' => [DeleteFileOptions::class],
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