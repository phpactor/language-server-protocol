<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * The parameters of a [ExecuteCommandRequest](#ExecuteCommandRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams
 */
class ExecuteCommandParams
{
    /**
     * The identifier of the actual command handler.
     *
     * @var string
     */
    public $command;

    /**
     * Arguments that the command should be invoked with.
     *
     * @var array<mixed>|null
     */
    public $arguments;

    /**
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

    /**
     * @param string $command
     * @param array<mixed>|null $arguments
     * @param int|string|null $workDoneToken
     */
    public function __construct(string $command, ?array $arguments = null, $workDoneToken = null)
    {
        $this->command = $command;
        $this->arguments = $arguments;
        $this->workDoneToken = $workDoneToken;
    }
}