<?php

namespace LanguageServerProtocol;

class DidSaveTextDocumentParams
{
    /**
     * The document that was closed.
     *
     * @var VersionedTextDocumentIdentifier
     */
    public $textDocument;

    /**
     * Optional the content when saved. Depends on the includeText value
     * when the save notification was requested.
     *
     * @var string
     */
    public $text;

    /**
     * @param VersionedTextDocumentIdentifier $textDocument
     * @param string $text
     */
    public function __construct(VersionedTextDocumentIdentifier $textDocument, string $text)
    {
        $this->textDocument = $textDocument;
        $this->text = $text;
    }
}