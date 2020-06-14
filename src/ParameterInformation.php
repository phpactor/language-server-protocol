<?php

namespace LanguageServerProtocol;

class ParameterInformation
{
    /**
     * The label of this parameter information.
     * 
     * Either a string or an inclusive start and exclusive end offsets within its containing
     * signature label. (see SignatureInformation.label). The offsets are based on a UTF-16
     * string representation as `Position` and `Range` does.
     * 
     * *Note*: a label of type string should be a substring of its containing signature label.
     * Its intended use case is to highlight the parameter label part in the `SignatureInformation.label`.
     *
     * @var string|array{int,int}
     */
    public $label;

    /**
     * The human-readable doc-comment of this signature. Will be shown
     * in the UI but can be omitted.
     *
     * @var string|MarkupContent
     */
    public $documentation;

    public function __construct(object $label, object $documentation)
    {
        $this->label = $label;
        $this->documentation = $documentation;
    }
}