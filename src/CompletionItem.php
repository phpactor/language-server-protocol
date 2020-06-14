<?php

namespace LanguageServerProtocol;

class CompletionItem
{
    /**
     * The label of this completion item. By default
     * also the text that is inserted when selecting
     * this completion.
     *
     * @var string
     */
    public $label;

    /**
     * The kind of this completion item. Based of the kind
     * an icon is chosen by the editor.
     *
     * @var CompletionItemKind
     */
    public $kind;

    /**
     * Tags for this completion item.
     *
     * @var array<CompletionItemTag>
     */
    public $tags;

    /**
     * A human-readable string with additional information
     * about this item, like type or symbol information.
     *
     * @var string
     */
    public $detail;

    /**
     * A human-readable string that represents a doc-comment.
     *
     * @var string|MarkupContent
     */
    public $documentation;

    /**
     * Indicates if this item is deprecated.
     *
     * @var string
     */
    public $deprecated;

    /**
     * Select this item when showing.
     * 
     * *Note* that only one completion item can be selected and that the
     * tool / client decides which item that is. The rule is that the *first*
     * item of those that match best is selected.
     *
     * @var string
     */
    public $preselect;

    /**
     * A string that should be used when comparing this item
     * with other items. When `falsy` the [label](#CompletionItem.label)
     * is used.
     *
     * @var string
     */
    public $sortText;

    /**
     * A string that should be used when filtering a set of
     * completion items. When `falsy` the [label](#CompletionItem.label)
     * is used.
     *
     * @var string
     */
    public $filterText;

    /**
     * A string that should be inserted into a document when selecting
     * this completion. When `falsy` the [label](#CompletionItem.label)
     * is used.
     * 
     * The `insertText` is subject to interpretation by the client side.
     * Some tools might not take the string literally. For example
     * VS Code when code complete is requested in this example `con<cursor position>`
     * and a completion item with an `insertText` of `console` is provided it
     * will only insert `sole`. Therefore it is recommended to use `textEdit` instead
     * since it avoids additional client side interpretation.
     *
     * @var string
     */
    public $insertText;

    /**
     * The format of the insert text. The format applies to both the `insertText` property
     * and the `newText` property of a provided `textEdit`. If ommitted defaults to
     * `InsertTextFormat.PlainText`.
     *
     * @var InsertTextFormat
     */
    public $insertTextFormat;

    /**
     * An [edit](#TextEdit) which is applied to a document when selecting
     * this completion. When an edit is provided the value of
     * [insertText](#CompletionItem.insertText) is ignored.
     * 
     * *Note:* The text edit's range must be a [single line] and it must contain the position
     * at which completion has been requested.
     *
     * @var TextEdit
     */
    public $textEdit;

    /**
     * An optional array of additional [text edits](#TextEdit) that are applied when
     * selecting this completion. Edits must not overlap (including the same insert position)
     * with the main [edit](#CompletionItem.textEdit) nor with themselves.
     * 
     * Additional text edits should be used to change text unrelated to the current cursor position
     * (for example adding an import statement at the top of the file if the completion item will
     * insert an unqualified type).
     *
     * @var array<TextEdit>
     */
    public $additionalTextEdits;

    /**
     * An optional set of characters that when pressed while this completion is active will accept it first and
     * then type that character. *Note* that all commit characters should have `length=1` and that superfluous
     * characters will be ignored.
     *
     * @var array<string>
     */
    public $commitCharacters;

    /**
     * An optional [command](#Command) that is executed *after* inserting this completion. *Note* that
     * additional modifications to the current document should be described with the
     * [additionalTextEdits](#CompletionItem.additionalTextEdits)-property.
     *
     * @var Command
     */
    public $command;

    /**
     * An data entry field that is preserved on a completion item between
     * a [CompletionRequest](#CompletionRequest) and a [CompletionResolveRequest]
     * (#CompletionResolveRequest)
     *
     * @var mixed
     */
    public $data;

    public function __construct(string $label, CompletionItemKind $kind, array $tags, string $detail, object $documentation, string $deprecated, string $preselect, string $sortText, string $filterText, string $insertText, InsertTextFormat $insertTextFormat, TextEdit $textEdit, array $additionalTextEdits, array $commitCharacters, Command $command, null $data)
    {
        $this->label = $label;
        $this->kind = $kind;
        $this->tags = $tags;
        $this->detail = $detail;
        $this->documentation = $documentation;
        $this->deprecated = $deprecated;
        $this->preselect = $preselect;
        $this->sortText = $sortText;
        $this->filterText = $filterText;
        $this->insertText = $insertText;
        $this->insertTextFormat = $insertTextFormat;
        $this->textEdit = $textEdit;
        $this->additionalTextEdits = $additionalTextEdits;
        $this->commitCharacters = $commitCharacters;
        $this->command = $command;
        $this->data = $data;
    }
}