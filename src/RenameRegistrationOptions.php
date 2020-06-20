<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Registration options for a [RenameRequest](#RenameRequest).
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, RenameOptions
 */
class RenameRegistrationOptions
{
    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     * Renames should be checked and tested before being executed.
     *
     * @var bool|null
     */
    public $prepareProvider;

    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     * @param bool|null $prepareProvider
     * @param bool|null $workDoneProgress
     */
    public function __construct($documentSelector = null, ?bool $prepareProvider = null, ?bool $workDoneProgress = null)
    {
        $this->documentSelector = $documentSelector;
        $this->prepareProvider = $prepareProvider;
        $this->workDoneProgress = $workDoneProgress;
    }
}