<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentRegistrationOptions, SignatureHelpOptions
 */
class SignatureHelpRegistrationOptions
{
    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * List of characters that trigger signature help.
     *
     * @var array<string>|null
     */
    public $triggerCharacters;

    /**
     * List of characters that re-trigger signature help.
     * 
     * These trigger characters are only active when signature help is already showing. All trigger characters
     * are also counted as re-trigger characters.
     *
     * @var array<string>|null
     */
    public $retriggerCharacters;

    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     * @param bool|null $workDoneProgress
     * @param array<string>|null $triggerCharacters
     * @param array<string>|null $retriggerCharacters
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     */
    public function __construct(?bool $workDoneProgress, ?array $triggerCharacters, ?array $retriggerCharacters, $documentSelector)
    {
        $this->workDoneProgress = $workDoneProgress;
        $this->triggerCharacters = $triggerCharacters;
        $this->retriggerCharacters = $retriggerCharacters;
        $this->documentSelector = $documentSelector;
    }
}