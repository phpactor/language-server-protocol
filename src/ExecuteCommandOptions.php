<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressOptions
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
     * @param array<string> $commands
     */
    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }
}