<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Create file operation.
 *
 * Mixins (implemented TS interfaces): ResourceOperation
 */
class CreateFile
{
    /**
     *
     * @var string
     */
    public $kind;

    /**
     * The resource to create.
     *
     * @var string
     */
    public $uri;

    /**
     * Additional options
     *
     * @var CreateFileOptions|null
     */
    public $options;

    /**
     * @param string $kind
     * @param string $uri
     * @param CreateFileOptions|null $options
     */
    public function __construct(string $kind, string $uri, ?CreateFileOptions $options = null)
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
            'options' => [CreateFileOptions::class],
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