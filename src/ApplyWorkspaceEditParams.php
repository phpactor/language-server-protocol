<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

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
    public function __construct(WorkspaceEdit $edit, ?string $label = null)
    {
        $this->label = $label;
        $this->edit = $edit;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'edit' => [WorkspaceEdit::class],
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
