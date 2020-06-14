<?php

namespace LanguageServerProtocol;

class WorkspaceFoldersServerCapabilities
{
    /**
     * The workspace server capabilities
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