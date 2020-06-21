<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * A code action represents a change that can be performed in code, e.g. to fix a problem or
 * to refactor code.
 * 
 * A CodeAction must set either `edit` and/or a `command`. If both are supplied, the `edit` is applied first, then the `command` is executed.
 */
class CodeAction
{
    /**
     * A short, human-readable, title for this code action.
     *
     * @var string
     */
    public $title;

    /**
     * The kind of the code action.
     * 
     * Used to filter code actions.
     *
     * @var string|null
     */
    public $kind;

    /**
     * The diagnostics that this code action resolves.
     *
     * @var array<Diagnostic>|null
     */
    public $diagnostics;

    /**
     * Marks this as a preferred action. Preferred actions are used by the `auto fix` command and can be targeted
     * by keybindings.
     * 
     * A quick fix should be marked preferred if it properly addresses the underlying error.
     * A refactoring should be marked preferred if it is the most reasonable choice of actions to take.
     *
     * @var bool|null
     */
    public $isPreferred;

    /**
     * The workspace edit this code action performs.
     *
     * @var WorkspaceEdit|null
     */
    public $edit;

    /**
     * A command this code action executes. If a code action
     * provides a edit and a command, first the edit is
     * executed and then the command.
     *
     * @var Command|null
     */
    public $command;

    /**
     * @param string $title
     * @param string|null $kind
     * @param array<Diagnostic>|null $diagnostics
     * @param bool|null $isPreferred
     * @param WorkspaceEdit|null $edit
     * @param Command|null $command
     */
    public function __construct(string $title, ?string $kind = null, ?array $diagnostics = null, ?bool $isPreferred = null, ?WorkspaceEdit $edit = null, ?Command $command = null)
    {
        $this->title = $title;
        $this->kind = $kind;
        $this->diagnostics = $diagnostics;
        $this->isPreferred = $isPreferred;
        $this->edit = $edit;
        $this->command = $command;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'edit' => [WorkspaceEdit::class],
            'command' => [Command::class],
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