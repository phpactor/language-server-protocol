<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

class ResourceOperation
{
    /**
     *
     * @var string
     */
    public $kind;

    /**
     * @param string $kind
     */
    public function __construct(string $kind)
    {
        $this->kind = $kind;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}