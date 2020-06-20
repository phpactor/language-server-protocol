<?php // Auto-generated from vscode-languageserver-protocol (typescript)

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
     * @var TextEdit|null
     */
    public $textEdit;

    /**
     * An optional array of additional [text edits](#TextEdit) that are applied when
     * selecting this color presentation. Edits must not overlap with the main [edit](#ColorPresentation.textEdit) nor with themselves.
     *
     * @var array<TextEdit>|null
     */
    public $additionalTextEdits;

    /**
     * @param string $label
     * @param TextEdit|null $textEdit
     * @param array<TextEdit>|null $additionalTextEdits
     */
    public function __construct(string $label, ?TextEdit $textEdit = null, ?array $additionalTextEdits = null)
    {
        $this->label = $label;
        $this->textEdit = $textEdit;
        $this->additionalTextEdits = $additionalTextEdits;
    }
}