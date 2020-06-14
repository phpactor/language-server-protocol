<?php

namespace LanguageServerProtocol;

class DocumentOnTypeFormattingOptions
{
    /**
     * A character on which formatting should be triggered, like `}`.
     *
     * @var string
     */
    public $firstTriggerCharacter;

    /**
     * More trigger characters.
     *
     * @var array<string>
     */
    public $moreTriggerCharacter;

    public function __construct(string $firstTriggerCharacter, array $moreTriggerCharacter)
    {
        $this->$firstTriggerCharacter = $this->$firstTriggerCharacter;
        $this->$moreTriggerCharacter = $this->$moreTriggerCharacter;
    }
}