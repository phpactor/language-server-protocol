<?php

namespace LanguageServerProtocol;

class WorkspaceSymbolParams
{
    /**
     * A query string to filter symbols by. Clients may send an empty
     * string here to request all symbols.
     *
     * @var string
     */
    public $query;

    /**
     * @param string $query
     */
    public function __construct(string $query)
    {
        $this->query = $query;
    }
}