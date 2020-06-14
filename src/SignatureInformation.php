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

    /**
     * @param string $label
     * @param string|MarkupContent $documentation
     * @param array<ParameterInformation> $parameters
     */
    public function __construct(string $label, $documentation, array $parameters)
    {
        $this->label = $label;
        $this->documentation = $documentation;
        $this->parameters = $parameters;
    }
}