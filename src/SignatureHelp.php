<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * Signature help represents the signature of something
 * callable. There can be multiple signature but only one
 * active and only one active parameter.
 */
class SignatureHelp
{
    /**
     * One or more signatures.
     *
     * @var array<SignatureInformation>
     */
    public $signatures;

    /**
     * The active signature. Set to `null` if no
     * signatures exist.
     *
     * @var int|null
     */
    public $activeSignature;

    /**
     * The active parameter of the active signature. Set to `null`
     * if the active signature has no parameters.
     *
     * @var int|null
     */
    public $activeParameter;

    /**
     * @param array<SignatureInformation> $signatures
     * @param int|null $activeSignature
     * @param int|null $activeParameter
     */
    public function __construct(array $signatures, $activeSignature = null, $activeParameter = null)
    {
        $this->signatures = $signatures;
        $this->activeSignature = $activeSignature;
        $this->activeParameter = $activeParameter;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}