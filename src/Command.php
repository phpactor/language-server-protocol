<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * Represents a reference to a command. Provides a title which
 * will be used to represent a command in the UI and, optionally,
 * an array of arguments which will be passed to the command handler
 * function when invoked.
 */
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
     * @var array<mixed>|null
     */
    public $arguments;

    /**
     * @param string $title
     * @param string $command
     * @param array<mixed>|null $arguments
     */
    public function __construct(string $title, string $command, ?array $arguments = null)
    {
        $this->title = $title;
        $this->command = $command;
        $this->arguments = $arguments;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}