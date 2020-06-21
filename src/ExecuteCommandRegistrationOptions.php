<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * Registration options for a [ExecuteCommandRequest](#ExecuteCommandRequest).
 *
 * Mixins (implemented TS interfaces): ExecuteCommandOptions
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
    public function __construct(array $commands, ?bool $workDoneProgress = null)
    {
        $this->commands = $commands;
        $this->workDoneProgress = $workDoneProgress;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}