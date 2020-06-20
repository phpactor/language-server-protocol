<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * The server capabilities of a [ExecuteCommandRequest](#ExecuteCommandRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class ExecuteCommandOptions
{
    /**
     * The commands to be executed on the server
     *
     * @var array<string>
     */
    public $commands;

    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param array<string> $commands
     * @param bool|null $workDoneProgress
     */
    public function __construct(array $commands, ?bool $workDoneProgress = null)
    {
        $this->commands = $commands;
        $this->workDoneProgress = $workDoneProgress;
    }
}