<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * The server capabilities of a [ExecuteCommandRequest](#ExecuteCommandRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
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
        $map = [
        ];
        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                continue;
            }
            foreach ($map[$key] as $className) {
               try {
                   $value = Invoke::new($className, $value);
                   continue;
               } catch (Exception $e) {
                   continue;
               }
            }
        }
        return Invoke::new(self::class, $array);
    }
        
}