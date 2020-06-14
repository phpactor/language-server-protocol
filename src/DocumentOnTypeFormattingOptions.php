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

    /**
     * @param string $firstTriggerCharacter
     * @param array<string> $moreTriggerCharacter
     */
    public function __construct(string $firstTriggerCharacter, array $moreTriggerCharacter)
    {
        $this->firstTriggerCharacter = $firstTriggerCharacter;
        $this->moreTriggerCharacter = $moreTriggerCharacter;
    }
}