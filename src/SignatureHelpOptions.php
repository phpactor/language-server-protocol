<?php

namespace LanguageServerProtocol;

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
     * @param array<string>|null $triggerCharacters
     * @param array<string>|null $retriggerCharacters
     */
    public function __construct(?array $triggerCharacters, ?array $retriggerCharacters)
    {
        $this->triggerCharacters = $triggerCharacters;
        $this->retriggerCharacters = $retriggerCharacters;
    }
}