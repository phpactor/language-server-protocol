<?php

namespace LanguageServerProtocol;

/**
 * implements SelectionRangeOptions, TextDocumentRegistrationOptions, StaticRegistrationOptions
 */
class SelectionRangeRegistrationOptions
{
    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     * The id used to register the request. The id can be used to deregister
     * the request again. See also Registration#id.
     *
     * @var string|null
     */
    public $id;

    /**
     * @param bool|null $workDoneProgress
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     * @param string|null $id
     */
    public function __construct(?bool $workDoneProgress, $documentSelector, ?string $id)
    {
        $this->workDoneProgress = $workDoneProgress;
        $this->documentSelector = $documentSelector;
        $this->id = $id;
    }
}