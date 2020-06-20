<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, StaticRegistrationOptions, DocumentColorOptions
 */
class DocumentColorRegistrationOptions
{
    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     * The id used to register the request. The id can be used to deregister
     * the request again. See also Registration#id.
     *
     * @var string|null
     */
    public $id;

    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     * @param string|null $id
     * @param bool|null $workDoneProgress
     */
    public function __construct($documentSelector = null, ?string $id = null, ?bool $workDoneProgress = null)
    {
        $this->documentSelector = $documentSelector;
        $this->id = $id;
        $this->workDoneProgress = $workDoneProgress;
    }
}