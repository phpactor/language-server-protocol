<?php

namespace LanguageServerProtocol;

class ColorPresentation
{
    /**
     * The label of this color presentation. It will be shown on the color
     * picker header. By default this is also the text that is inserted when selecting
     * this color presentation.
     *
     * @var string
     */
    public $label;

    /**
     * An [edit](#TextEdit) which is applied to a document when selecting
     * this presentation for the color.  When `falsy` the [label](#ColorPresentation.label)
     * is used.
     *
     * @var TextEdit
     */
    public $textEdit;

    /**
     * An optional array of additional [text edits](#TextEdit) that are applied when
     * selecting this color presentation. Edits must not overlap with the main [edit](#ColorPresentation.textEdit) nor with themselves.
     *
     * @var array<TextEdit>
     */
    public $additionalTextEdits;

    public function __construct(string $label, TextEdit $textEdit, array $additionalTextEdits)
    {
        $this->label = $label;
        $this->textEdit = $textEdit;
        $this->additionalTextEdits = $additionalTextEdits;
    }
}