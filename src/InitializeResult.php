<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * The result returned from an initialize request.
 */
class InitializeResult
{
    /**
     * The capabilities the language server provides.
     *
     * @var ServerCapabilities
     */
    public $capabilities;

    /**
     * Information about the server.
     *
     * @var array<mixed>|null
     */
    public $serverInfo;

    /**
     * @param ServerCapabilities $capabilities
     * @param array<mixed>|null $serverInfo
     */
    public function __construct(ServerCapabilities $capabilities, ?array $serverInfo = null)
    {
        $this->capabilities = $capabilities;
        $this->serverInfo = $serverInfo;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'capabilities' => [ServerCapabilities::class],
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