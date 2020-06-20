<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressParams
 */
class ExecuteCommandParams
{
    /**
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

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
     * @param int|string|null $workDoneToken
     * @param string $command
     * @param array<mixed>|null $arguments
     */
    public function __construct($workDoneToken, string $command, ?array $arguments)
    {
        $this->workDoneToken = $workDoneToken;
        $this->command = $command;
        $this->arguments = $arguments;
    }
}