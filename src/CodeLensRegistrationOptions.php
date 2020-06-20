<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentRegistrationOptions, CodeLensOptions
 */
class CodeLensRegistrationOptions
{
    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * Code lens has a resolve provider as well.
     *
     * @var bool|null
     */
    public $resolveProvider;

    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     * @param bool|null $workDoneProgress
     * @param bool|null $resolveProvider
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     */
    public function __construct(?bool $workDoneProgress, ?bool $resolveProvider, $documentSelector)
    {
        $this->workDoneProgress = $workDoneProgress;
        $this->resolveProvider = $resolveProvider;
        $this->documentSelector = $documentSelector;
    }
}