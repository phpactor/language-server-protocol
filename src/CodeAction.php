<?php

namespace LanguageServerProtocol;

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
     * @var CodeActionKind
     */
    public $kind;

    /**
     * The diagnostics that this code action resolves.
     *
     * @var array<Diagnostic>
     */
    public $diagnostics;

    /**
     * Marks this as a preferred action. Preferred actions are used by the `auto fix` command and can be targeted
     * by keybindings.
     * 
     * A quick fix should be marked preferred if it properly addresses the underlying error.
     * A refactoring should be marked preferred if it is the most reasonable choice of actions to take.
     *
     * @var string
     */
    public $isPreferred;

    /**
     * The workspace edit this code action performs.
     *
     * @var WorkspaceEdit
     */
    public $edit;

    /**
     * A command this code action executes. If a code action
     * provides a edit and a command, first the edit is
     * executed and then the command.
     *
     * @var Command
     */
    public $command;

    public function __construct(string $title, CodeActionKind $kind, array $diagnostics, string $isPreferred, WorkspaceEdit $edit, Command $command)
    {
        $this->$title = $this->$title;
        $this->$kind = $this->$kind;
        $this->$diagnostics = $this->$diagnostics;
        $this->$isPreferred = $this->$isPreferred;
        $this->$edit = $this->$edit;
        $this->$command = $this->$command;
    }
}