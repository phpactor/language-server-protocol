<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentRegistrationOptions, ImplementationOptions, StaticRegistrationOptions
 */
class ImplementationRegistrationOptions
{
    /**
     * The id used to register the request. The id can be used to deregister
     * the request again. See also Registration#id.
     *
     * @var string|null
     */
    public $id;

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
     * @param string|null $id
     * @param bool|null $workDoneProgress
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     */
    public function __construct(?string $id, ?bool $workDoneProgress, $documentSelector)
    {
        $this->id = $id;
        $this->workDoneProgress = $workDoneProgress;
        $this->documentSelector = $documentSelector;
    }
}