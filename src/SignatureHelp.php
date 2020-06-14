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

    public function __construct(array $signatures, object $activeSignature, object $activeParameter)
    {
        $this->$signatures = $this->$signatures;
        $this->$activeSignature = $this->$activeSignature;
        $this->$activeParameter = $this->$activeParameter;
    }
}