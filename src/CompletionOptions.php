<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Completion options.
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class CompletionOptions
{
    /**
     * Most tools trigger completion request automatically without explicitly requesting
     * it using a keyboard shortcut (e.g. Ctrl+Space). Typically they do so when the user
     * starts to type an identifier. For example if the user types `c` in a JavaScript file
     * code complete will automatically pop up present `console` besides others as a
     * completion item. Characters that make up identifiers don't need to be listed here.
     * 
     * If code complete should automatically be trigger on characters not being valid inside
     * an identifier (for example `.` in JavaScript) list them in `triggerCharacters`.
     *
     * @var array<string>|null
     */
    public $triggerCharacters;

    /**
     * The list of all possible characters that commit a completion. This field can be used
     * if clients don't support individual commmit characters per completion item. See
     * `ClientCapabilities.textDocument.completion.completionItem.commitCharactersSupport`
     * 
     * If a server provides both `allCommitCharacters` and commit characters on an individual
     * completion item the ones on the completion item win.
     *
     * @var array<string>|null
     */
    public $allCommitCharacters;

    /**
     * The server provides support to resolve additional
     * information for a completion item.
     *
     * @var bool|null
     */
    public $resolveProvider;

    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param array<string>|null $triggerCharacters
     * @param array<string>|null $allCommitCharacters
     * @param bool|null $resolveProvider
     * @param bool|null $workDoneProgress
     */
    public function __construct(?array $triggerCharacters = null, ?array $allCommitCharacters = null, ?bool $resolveProvider = null, ?bool $workDoneProgress = null)
    {
        $this->triggerCharacters = $triggerCharacters;
        $this->allCommitCharacters = $allCommitCharacters;
        $this->resolveProvider = $resolveProvider;
        $this->workDoneProgress = $workDoneProgress;
    }
}