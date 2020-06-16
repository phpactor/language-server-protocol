<?php

namespace LanguageServerProtocol;

class WorkspaceFoldersServerCapabilities
{
    /**
     * The workspace server capabilities
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