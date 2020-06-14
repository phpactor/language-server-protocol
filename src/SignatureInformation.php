<?php

namespace LanguageServerProtocol;

class SignatureInformation
{
    /**
     * The label of this signature. Will be shown in
     * the UI.
     *
     * @var string
     */
    public $label;

    /**
     * The human-readable doc-comment of this signature. Will be shown
     * in the UI but can be omitted.
     *
     * @var string|MarkupContent
     */
    public $documentation;

    /**
     * The parameters of this signature.
     *
     * @var array<ParameterInformation>
     */
    public $parameters;

    public function __construct(string $label, object $documentation, array $parameters)
    {
        $this->$label = $this->$label;
        $this->$documentation = $this->$documentation;
        $this->$parameters = $this->$parameters;
    }
}