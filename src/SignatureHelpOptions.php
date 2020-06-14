<?php

namespace LanguageServerProtocol;

class SignatureHelpOptions
{
    /**
     * List of characters that trigger signature help.
     *
     * @var array<string>
     */
    public $triggerCharacters;

    /**
     * List of characters that re-trigger signature help.
     * 
     * These trigger characters are only active when signature help is already showing. All trigger characters
     * are also counted as re-trigger characters.
     *
     * @var array<string>
     */
    public $retriggerCharacters;

    public function __construct(array $triggerCharacters, array $retriggerCharacters)
    {
        $this->$triggerCharacters = $this->$triggerCharacters;
        $this->$retriggerCharacters = $this->$retriggerCharacters;
    }
}