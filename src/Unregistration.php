<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * General parameters to unregister a request or notification.
 */
class Unregistration
{
    /**
     * The id used to unregister the request or notification. Usually an id
     * provided during the register request.
     *
     * @var string
     */
    public $id;

    /**
     * The method to unregister for.
     *
     * @var string
     */
    public $method;

    /**
     * @param string $id
     * @param string $method
     */
    public function __construct(string $id, string $method)
    {
        $this->id = $id;
        $this->method = $method;
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