<?php

namespace LanguageServerProtocol;

class CompletionContext
{
    /**
     * How the completion was triggered.
     *
     * @var CompletionTriggerKind
     */
    public $triggerKind;

    /**
     * The trigger character (a single character) that has trigger code complete.
     * Is undefined if `triggerKind !== CompletionTriggerKind.TriggerCharacter`
     *
     * @var string
     */
    public $triggerCharacter;

    public function __construct(CompletionTriggerKind $triggerKind, string $triggerCharacter)
    {
        $this->triggerKind = $triggerKind;
        $this->triggerCharacter = $triggerCharacter;
    }
}