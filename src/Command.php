<?php

namespace LanguageServerProtocol;

class Command
{
    /**
     * Title of the command, like `save`.
     *
     * @var string
     */
    public $title;

    /**
     * The identifier of the actual command handler.
     *
     * @var string
     */
    public $command;

    /**
     * Arguments that the command handler should be
     * invoked with.
     *
     * @var array<mixed>
     */
    public $arguments;

    /**
     * @param string $title
     * @param string $command
     * @param array<mixed> $arguments
     */
    public function __construct(string $title, string $command, array $arguments)
    {
        $this->title = $title;
        $this->command = $command;
        $this->arguments = $arguments;
    }
}