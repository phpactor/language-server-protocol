<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

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
     * @var CodeActionKind::*|null
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
     * Marks that the code action cannot currently be applied.
     * 
     * Clients should follow the following guidelines regarding disabled code actions:
     * 
     *    - Disabled code actions are not shown in automatic [lightbulb](https://code.visualstudio.com/docs/editor/editingevolved#_code-action)
     *      code action menu.
     * 
     *    - Disabled actions are shown as faded out in the code action menu when the user request a more specific type
     *      of code action, such as refactorings.
     * 
     *    - If the user has a [keybinding](https://code.visualstudio.com/docs/editor/refactoring#_keybindings-for-code-actions)
     *      that auto applies a code action and only a disabled code actions are returned, the client should show the user an
     *      error message with `reason` in the editor.
     *
     * @var array<mixed>|null
     */
    public $disabled;

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
     * A data entry field that is preserved on a code action between
     * a `textDocument/codeAction` and a `codeAction/resolve` request.
     *
     * @var mixed|null
     */
    public $data;

    /**
     * @param string $title
     * @param CodeActionKind::*|null $kind
     * @param array<Diagnostic>|null $diagnostics
     * @param bool|null $isPreferred
     * @param array<mixed>|null $disabled
     * @param WorkspaceEdit|null $edit
     * @param Command|null $command
     * @param mixed|null $data
     */
    public function __construct(string $title, $kind = null, ?array $diagnostics = null, ?bool $isPreferred = null, ?array $disabled = null, ?WorkspaceEdit $edit = null, ?Command $command = null, $data = null)
    {
        $this->title = $title;
        $this->kind = $kind;
        $this->diagnostics = $diagnostics;
        $this->isPreferred = $isPreferred;
        $this->disabled = $disabled;
        $this->edit = $edit;
        $this->command = $command;
        $this->data = $data;
    }

    /**
     * @param array<string,mixed> $array
     * @return static
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'title' => ['names' => [], 'iterable' => false],
            'kind' => ['names' => [], 'iterable' => false],
            'diagnostics' => ['names' => [Diagnostic::class], 'iterable' => true],
            'isPreferred' => ['names' => [], 'iterable' => false],
            'disabled' => ['names' => [], 'iterable' => false],
            'edit' => ['names' => [WorkspaceEdit::class], 'iterable' => false],
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

            // from here we only care about arrays that can be transformed into
            // objects
            if (!is_array($value)) {
                continue;
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