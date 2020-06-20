<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Reference options.
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class ReferenceOptions
{
    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param bool|null $workDoneProgress
     */
    public function __construct(?bool $workDoneProgress = null)
    {
        $this->workDoneProgress = $workDoneProgress;
    }
}