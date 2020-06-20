<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Provider options for a [DocumentRangeFormattingRequest](#DocumentRangeFormattingRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class DocumentRangeFormattingOptions
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