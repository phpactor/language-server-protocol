<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Describe options to be used when registered for text document change events.
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions
 */
class TextDocumentChangeRegistrationOptions
{
    /**
     * How documents are synced to the server.
     *
     * @var 0|1|2
     */
    public $syncKind;

    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     * @param 0|1|2 $syncKind
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     */
    public function __construct($syncKind, $documentSelector = null)
    {
        $this->syncKind = $syncKind;
        $this->documentSelector = $documentSelector;
    }
}