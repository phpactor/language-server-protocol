<?php

namespace LanguageServerProtocol;

class WorkspaceFoldersClientCapabilities
{
    /**
     * The workspace client capabilities
     *
     * @var array<mixed>|null
     */
    public $workspace;

    /**
     * @param array<mixed>|null $workspace
     */
    public function __construct($workspace)
    {
        $this->workspace = $workspace;
    }
}