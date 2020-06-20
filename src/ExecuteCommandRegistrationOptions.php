<?php

namespace LanguageServerProtocol;

/**
 * implements ExecuteCommandOptions
 */
class ExecuteCommandRegistrationOptions
{
    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * The commands to be executed on the server
     *
     * @var array<string>
     */
    public $commands;

    /**
     * @param bool|null $workDoneProgress
     * @param array<string> $commands
     */
    public function __construct(?bool $workDoneProgress, array $commands)
    {
        $this->workDoneProgress = $workDoneProgress;
        $this->commands = $commands;
    }
}