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
    public function __construct(string $title, ?string $kind, ?array $diagnostics, ?bool $isPreferred, ?WorkspaceEdit $edit, ?Command $command)
    {
        $this->title = $title;
        $this->kind = $kind;
        $this->diagnostics = $diagnostics;
        $this->isPreferred = $isPreferred;
        $this->edit = $edit;
        $this->command = $command;
    }
}