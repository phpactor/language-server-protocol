<?php

namespace LanguageServerProtocol;

/**
 * Registration options for a [ReferencesRequest](#ReferencesRequest).
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, ReferenceOptions
 */
class ReferenceRegistrationOptions
{
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
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     * @param bool|null $workDoneProgress
     */
    public function __construct($documentSelector = null, ?bool $workDoneProgress = null)
    {
        $this->documentSelector = $documentSelector;
        $this->workDoneProgress = $workDoneProgress;
    }
}