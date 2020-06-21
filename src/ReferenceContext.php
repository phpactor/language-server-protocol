<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * Value-object that contains additional information when
 * requesting references.
 */
class ReferenceContext
{
    /**
     * Include the declaration of the current symbol.
     *
     * @var bool
     */
    public $includeDeclaration;

    /**
     * @param bool $includeDeclaration
     */
    public function __construct(bool $includeDeclaration)
    {
        $this->includeDeclaration = $includeDeclaration;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}