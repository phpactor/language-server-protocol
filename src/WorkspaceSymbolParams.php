<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams, PartialResultParams
 */
class WorkspaceSymbolParams
{
    /**
     * An optional token that a server can use to report partial results (e.g. streaming) to
     * the client.
     *
     * @var int|string|null
     */
    public $partialResultToken;

    /**
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

    /**
     * A query string to filter symbols by. Clients may send an empty
     * string here to request all symbols.
     *
     * @var string
     */
    public $query;

    /**
     * @param int|string|null $partialResultToken
     * @param int|string|null $workDoneToken
     * @param string $query
     */
    public function __construct($partialResultToken, $workDoneToken, string $query)
    {
        $this->partialResultToken = $partialResultToken;
        $this->workDoneToken = $workDoneToken;
        $this->query = $query;
    }
}