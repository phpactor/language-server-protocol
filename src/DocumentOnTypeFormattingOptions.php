<?php

namespace LanguageServerProtocol;

/**
 * Provider options for a [DocumentOnTypeFormattingRequest](#DocumentOnTypeFormattingRequest).
 */
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
     * @var array<string>|null
     */
    public $moreTriggerCharacter;

    /**
     * @param string $firstTriggerCharacter
     * @param array<string>|null $moreTriggerCharacter
     */
    public function __construct(string $firstTriggerCharacter, ?array $moreTriggerCharacter = null)
    {
        $this->firstTriggerCharacter = $firstTriggerCharacter;
        $this->moreTriggerCharacter = $moreTriggerCharacter;
    }
}