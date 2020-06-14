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

    public function __construct(string $title, string $command, array $arguments)
    {
        $this->$title = $this->$title;
        $this->$command = $this->$command;
        $this->$arguments = $this->$arguments;
    }
}