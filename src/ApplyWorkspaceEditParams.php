<?php

namespace LanguageServerProtocol;

class ApplyWorkspaceEditParams
{
    /**
     * An optional label of the workspace edit. This label is
     * presented in the user interface for example on an undo
     * stack to undo the workspace edit.
     *
     * @var string
     */
    public $label;

    /**
     * The edits to apply.
     *
     * @var WorkspaceEdit
     */
    public $edit;

    public function __construct(string $label, WorkspaceEdit $edit)
    {
        $this->$label = $this->$label;
        $this->$edit = $this->$edit;
    }
}