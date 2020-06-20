<?php

namespace LanguageServerProtocol;

/**
 * The parameters passed via a apply workspace edit request.
 */
class ApplyWorkspaceEditParams
{
    /**
     * An optional label of the workspace edit. This label is
     * presented in the user interface for example on an undo
     * stack to undo the workspace edit.
     *
     * @var string|null
     */
    public $label;

    /**
     * The edits to apply.
     *
     * @var WorkspaceEdit
     */
    public $edit;

    /**
     * @param string|null $label
     * @param WorkspaceEdit $edit
     */
    public function __construct(?string $label, WorkspaceEdit $edit)
    {
        $this->label = $label;
        $this->edit = $edit;
    }
}