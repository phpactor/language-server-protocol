<?php

namespace LanguageServerProtocol;

/**
 * implements SelectionRangeOptions, TextDocumentRegistrationOptions, StaticRegistrationOptions
 */
class SelectionRangeRegistrationOptions
{
    /**
     * The id used to register the request. The id can be used to deregister
     * the request again. See also Registration#id.
     *
     * @var string|null
     */
    public $id;

    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param string|null $id
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     * @param bool|null $workDoneProgress
     */
    public function __construct(?string $id, $documentSelector, ?bool $workDoneProgress)
    {
        $this->id = $id;
        $this->documentSelector = $documentSelector;
        $this->workDoneProgress = $workDoneProgress;
    }
}