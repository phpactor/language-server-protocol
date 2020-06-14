<?php

namespace LanguageServerProtocol;

class WorkspaceFoldersClientCapabilities
{
    /**
     * The workspace client capabilities
     *
     * @var array<mixed>
     */
    public $workspace;

    /**
     * @param array<mixed> $workspace
     */
    public function __construct($workspace)
    {
        $this->workspace = $workspace;
    }
}