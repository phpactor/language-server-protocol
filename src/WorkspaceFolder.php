<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

class WorkspaceFolder
{
    /**
     * The associated URI for this workspace folder.
     *
     * @var string
     */
    public $uri;

    /**
     * The name of the workspace folder. Used to refer to this
     * workspace folder in the user interface.
     *
     * @var string
     */
    public $name;

    /**
     * @param string $uri
     * @param string $name
     */
    public function __construct(string $uri, string $name)
    {
        $this->uri = $uri;
        $this->name = $name;
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