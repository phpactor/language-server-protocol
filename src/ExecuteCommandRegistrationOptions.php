<?php

namespace LanguageServerProtocol;

/**
 * implements ExecuteCommandOptions
 */
class ExecuteCommandRegistrationOptions
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
    public function __construct(array $commands, ?bool $workDoneProgress)
    {
        $this->commands = $commands;
        $this->workDoneProgress = $workDoneProgress;
    }
}