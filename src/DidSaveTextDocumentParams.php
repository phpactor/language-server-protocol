<?php

namespace LanguageServerProtocol;

/**
 * The parameters send in a save text document notification
 */
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
     * @var string|null
     */
    public $text;

    /**
     * @param VersionedTextDocumentIdentifier $textDocument
     * @param string|null $text
     */
    public function __construct(VersionedTextDocumentIdentifier $textDocument, ?string $text = null)
    {
        $this->textDocument = $textDocument;
        $this->text = $text;
    }
}