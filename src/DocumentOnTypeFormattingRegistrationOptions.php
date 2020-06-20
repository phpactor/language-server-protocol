<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentRegistrationOptions, DocumentOnTypeFormattingOptions
 */
class DocumentOnTypeFormattingRegistrationOptions
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
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     * @param string $firstTriggerCharacter
     * @param array<string>|null $moreTriggerCharacter
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     */
    public function __construct(string $firstTriggerCharacter, ?array $moreTriggerCharacter, $documentSelector)
    {
        $this->firstTriggerCharacter = $firstTriggerCharacter;
        $this->moreTriggerCharacter = $moreTriggerCharacter;
        $this->documentSelector = $documentSelector;
    }
}