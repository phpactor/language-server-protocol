<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressOptions
 */
class SignatureHelpOptions
{
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
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param array<string>|null $triggerCharacters
     * @param array<string>|null $retriggerCharacters
     * @param bool|null $workDoneProgress
     */
    public function __construct(?array $triggerCharacters, ?array $retriggerCharacters, ?bool $workDoneProgress)
    {
        $this->triggerCharacters = $triggerCharacters;
        $this->retriggerCharacters = $retriggerCharacters;
        $this->workDoneProgress = $workDoneProgress;
    }
}