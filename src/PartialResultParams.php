<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

class PartialResultParams
{
    /**
     * An optional token that a server can use to report partial results (e.g. streaming) to
     * the client.
     *
     * @var int|string|null
     */
    public $partialResultToken;

    /**
     * @param int|string|null $partialResultToken
     */
    public function __construct($partialResultToken = null)
    {
        $this->partialResultToken = $partialResultToken;
    }
}