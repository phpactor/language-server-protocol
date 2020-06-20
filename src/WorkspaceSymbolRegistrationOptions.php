<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Registration options for a [WorkspaceSymbolRequest](#WorkspaceSymbolRequest).
 *
 * Mixins (implemented TS interfaces): WorkspaceSymbolOptions
 */
class WorkspaceSymbolRegistrationOptions
{
    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param bool|null $workDoneProgress
     */
    public function __construct(?bool $workDoneProgress = null)
    {
        $this->workDoneProgress = $workDoneProgress;
    }
}