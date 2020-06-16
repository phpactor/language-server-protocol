<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams
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
     * @param string $command
     * @param array<mixed>|null $arguments
     */
    public function __construct(string $command, ?array $arguments)
    {
        $this->command = $command;
        $this->arguments = $arguments;
    }
}