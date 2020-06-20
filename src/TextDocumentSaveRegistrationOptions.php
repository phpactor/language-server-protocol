<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentRegistrationOptions, SaveOptions
 */
class TextDocumentSaveRegistrationOptions
{
    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     * The client is supposed to include the content on save.
     *
     * @var bool|null
     */
    public $includeText;

    /**
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     * @param bool|null $includeText
     */
    public function __construct($documentSelector, ?bool $includeText)
    {
        $this->documentSelector = $documentSelector;
        $this->includeText = $includeText;
    }
}