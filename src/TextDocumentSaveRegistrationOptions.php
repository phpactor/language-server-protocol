<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentRegistrationOptions, SaveOptions
 */
class TextDocumentSaveRegistrationOptions
{
    /**
     * The client is supposed to include the content on save.
     *
     * @var bool|null
     */
    public $includeText;

    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     * @param bool|null $includeText
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     */
    public function __construct(?bool $includeText, $documentSelector)
    {
        $this->includeText = $includeText;
        $this->documentSelector = $documentSelector;
    }
}