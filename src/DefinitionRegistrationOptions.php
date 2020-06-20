<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentRegistrationOptions, DefinitionOptions
 */
class DefinitionRegistrationOptions
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
     * @param bool|null $workDoneProgress
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     */
    public function __construct(?bool $workDoneProgress, $documentSelector)
    {
        $this->workDoneProgress = $workDoneProgress;
        $this->documentSelector = $documentSelector;
    }
}