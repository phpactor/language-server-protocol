<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentRegistrationOptions, RenameOptions
 */
class RenameRegistrationOptions
{
    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * Renames should be checked and tested before being executed.
     *
     * @var bool|null
     */
    public $prepareProvider;

    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     * @param bool|null $workDoneProgress
     * @param bool|null $prepareProvider
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     */
    public function __construct(?bool $workDoneProgress, ?bool $prepareProvider, $documentSelector)
    {
        $this->workDoneProgress = $workDoneProgress;
        $this->prepareProvider = $prepareProvider;
        $this->documentSelector = $documentSelector;
    }
}