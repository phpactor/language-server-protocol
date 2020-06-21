<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * A completion item represents a text snippet that is
 * proposed to complete text that is being typed.
 */
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
     * @var CompletionItemKind::*|null
     */
    public $kind;

    /**
     * Tags for this completion item.
     *
     * @var array<CompletionItemTag::*>|null
     */
    public $tags;

    /**
     * A human-readable string with additional information
     * about this item, like type or symbol information.
     *
     * @var string|null
     */
    public $detail;

    /**
     * A human-readable string that represents a doc-comment.
     *
     * @var string|MarkupContent|null
     */
    public $documentation;

    /**
     * Indicates if this item is deprecated.
     *
     * @var bool|null
     */
    public $deprecated;

    /**
     * Select this item when showing.
     * 
     * *Note* that only one completion item can be selected and that the
     * tool / client decides which item that is. The rule is that the *first*
     * item of those that match best is selected.
     *
     * @var bool|null
     */
    public $preselect;

    /**
     * A string that should be used when comparing this item
     * with other items. When `falsy` the [label](#CompletionItem.label)
     * is used.
     *
     * @var string|null
     */
    public $sortText;

    /**
     * A string that should be used when filtering a set of
     * completion items. When `falsy` the [label](#CompletionItem.label)
     * is used.
     *
     * @var string|null
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
     * @var string|null
     */
    public $insertText;

    /**
     * The format of the insert text. The format applies to both the `insertText` property
     * and the `newText` property of a provided `textEdit`. If ommitted defaults to
     * `InsertTextFormat.PlainText`.
     *
     * @var InsertTextFormat::*|null
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
     * @var TextEdit|null
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
     * @var array<TextEdit>|null
     */
    public $additionalTextEdits;

    /**
     * An optional set of characters that when pressed while this completion is active will accept it first and
     * then type that character. *Note* that all commit characters should have `length=1` and that superfluous
     * characters will be ignored.
     *
     * @var array<string>|null
     */
    public $commitCharacters;

    /**
     * An optional [command](#Command) that is executed *after* inserting this completion. *Note* that
     * additional modifications to the current document should be described with the
     * [additionalTextEdits](#CompletionItem.additionalTextEdits)-property.
     *
     * @var Command|null
     */
    public $command;

    /**
     * An data entry field that is preserved on a completion item between
     * a [CompletionRequest](#CompletionRequest) and a [CompletionResolveRequest]
     * (#CompletionResolveRequest)
     *
     * @var mixed|null
     */
    public $data;

    /**
     * @param string $label
     * @param CompletionItemKind::*|null $kind
     * @param array<CompletionItemTag::*>|null $tags
     * @param string|null $detail
     * @param string|MarkupContent|null $documentation
     * @param bool|null $deprecated
     * @param bool|null $preselect
     * @param string|null $sortText
     * @param string|null $filterText
     * @param string|null $insertText
     * @param InsertTextFormat::*|null $insertTextFormat
     * @param TextEdit|null $textEdit
     * @param array<TextEdit>|null $additionalTextEdits
     * @param array<string>|null $commitCharacters
     * @param Command|null $command
     * @param mixed|null $data
     */
    public function __construct(string $label, $kind = null, ?array $tags = null, ?string $detail = null, $documentation = null, ?bool $deprecated = null, ?bool $preselect = null, ?string $sortText = null, ?string $filterText = null, ?string $insertText = null, $insertTextFormat = null, ?TextEdit $textEdit = null, ?array $additionalTextEdits = null, ?array $commitCharacters = null, ?Command $command = null, $data = null)
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

    /**
     * @param array<string,mixed> $array
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false): self
    {
        $map = [
            'label' => ['names' => [], 'iterable' => false],
            'kind' => ['names' => [], 'iterable' => false],
            'tags' => ['names' => [], 'iterable' => true],
            'detail' => ['names' => [], 'iterable' => false],
            'documentation' => ['names' => [MarkupContent::class], 'iterable' => false],
            'deprecated' => ['names' => [], 'iterable' => false],
            'preselect' => ['names' => [], 'iterable' => false],
            'sortText' => ['names' => [], 'iterable' => false],
            'filterText' => ['names' => [], 'iterable' => false],
            'insertText' => ['names' => [], 'iterable' => false],
            'insertTextFormat' => ['names' => [], 'iterable' => false],
            'textEdit' => ['names' => [TextEdit::class], 'iterable' => false],
            'additionalTextEdits' => ['names' => [TextEdit::class], 'iterable' => true],
            'commitCharacters' => ['names' => [], 'iterable' => true],
            'command' => ['names' => [Command::class], 'iterable' => false],
            'data' => ['names' => [], 'iterable' => false],
        ];

        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                if ($allowUnknownKeys) {
                    unset($array[$key]);
                    continue;
                }

                throw new RuntimeException(sprintf(
                    'Parameter "%s" on class "%s" not known, known parameters: "%s"',
                    $key, 
                    self::class,
                    implode('", "', array_keys($map))
                ));
            }

            if (empty($map[$key]['names'])) {
                continue;
            }

            if ($map[$key]['iterable']) {
                $value = array_map(function ($object) use ($map, $key, $allowUnknownKeys) {
                    if (!is_array($object)) {
                        return $object;
                    }

                    return self::invokeFromNames($map[$key]['names'], $object, $allowUnknownKeys) ?: $object;
                }, $value);
                continue;
            }

            $names = $map[$key]['names'];
            $value = self::invokeFromNames($names, $value, $allowUnknownKeys) ?: $value;
        }
        
        return Invoke::new(self::class, $array);
    }

    /**
     * @param array<string> $classNames
     * @param array<string,mixed> $object
     */
    private static function invokeFromNames(array $classNames, array $object, bool $allowUnknownKeys): ?object
    {
        $lastException = null;
        foreach ($classNames as $className) {
            try {
                // @phpstan-ignore-next-line
                return call_user_func_array($className . '::fromArray', [$object, $allowUnknownKeys]);
            } catch (Exception $exception) {
                $lastException = $exception;
                continue;
            }
        }

        throw $lastException;
    }
        
}
