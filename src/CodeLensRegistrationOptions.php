<?php

namespace LanguageServerProtocol;

/**
 * Registration options for a [CodeLensRequest](#CodeLensRequest).
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, CodeLensOptions
 */
class CodeLensRegistrationOptions
{
    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     * Code lens has a resolve provider as well.
     *
     * @var bool|null
     */
    public $resolveProvider;

    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     * @param bool|null $resolveProvider
     * @param bool|null $workDoneProgress
     */
    public function __construct($documentSelector, ?bool $resolveProvider, ?bool $workDoneProgress)
    {
        $this->documentSelector = $documentSelector;
        $this->resolveProvider = $resolveProvider;
        $this->workDoneProgress = $workDoneProgress;
    }
}