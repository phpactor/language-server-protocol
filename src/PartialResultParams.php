<?php

namespace LanguageServerProtocol;

class PartialResultParams
{
    /**
     * An optional token that a server can use to report partial results (e.g. streaming) to
     * the client.
     *
     * @var ProgressToken
     */
    public $partialResultToken;

    public function __construct(ProgressToken $partialResultToken)
    {
        $this->partialResultToken = $partialResultToken;
    }
}