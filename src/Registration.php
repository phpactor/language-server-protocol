<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * General parameters to to register for an notification or to register a provider.
 */
class Registration
{
    /**
     * The id used to register the request. The id can be used to deregister
     * the request again.
     *
     * @var string
     */
    public $id;

    /**
     * The method to register for.
     *
     * @var string
     */
    public $method;

    /**
     * Options necessary for the registration.
     *
     * @var mixed|null
     */
    public $registerOptions;

    /**
     * @param string $id
     * @param string $method
     * @param mixed|null $registerOptions
     */
    public function __construct(string $id, string $method, $registerOptions = null)
    {
        $this->id = $id;
        $this->method = $method;
        $this->registerOptions = $registerOptions;
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