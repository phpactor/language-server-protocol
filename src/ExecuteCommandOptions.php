<?php

namespace LanguageServerProtocol;

class ExecuteCommandOptions
{
    /**
     * The commands to be executed on the server
     *
     * @var array<string>
     */
    public $commands;

    public function __construct(array $commands)
    {
        $this->$commands = $this->$commands;
    }
}