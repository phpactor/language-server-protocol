<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentRegistrationOptions, StaticRegistrationOptions, DocumentColorOptions
 */
class DocumentColorRegistrationOptions
{
    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

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
     * @param bool|null $workDoneProgress
     * @param string|null $id
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     */
    public function __construct(?bool $workDoneProgress, ?string $id, $documentSelector)
    {
        $this->workDoneProgress = $workDoneProgress;
        $this->id = $id;
        $this->documentSelector = $documentSelector;
    }
}