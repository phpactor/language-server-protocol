<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

class WorkDoneProgressCancelParams
{
    /**
     * The token to be used to report progress.
     *
     * @var int|string
     */
    public $token;

    /**
     * @param int|string $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }
}