<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Provider options for a [RenameRequest](#RenameRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class RenameOptions
{
    /**
     * Renames should be checked and tested before being executed.
     *
     * @var bool|null
     */
    public $prepareProvider;

    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param bool|null $prepareProvider
     * @param bool|null $workDoneProgress
     */
    public function __construct(?bool $prepareProvider = null, ?bool $workDoneProgress = null)
    {
        $this->prepareProvider = $prepareProvider;
        $this->workDoneProgress = $workDoneProgress;
    }
}