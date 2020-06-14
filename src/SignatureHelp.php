<?php

namespace LanguageServerProtocol;

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

    public function __construct(array $signatures, null $activeSignature, null $activeParameter)
    {
        $this->signatures = $signatures;
        $this->activeSignature = $activeSignature;
        $this->activeParameter = $activeParameter;
    }
}