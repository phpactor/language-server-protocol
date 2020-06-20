<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Provider options for a [DocumentHighlightRequest](#DocumentHighlightRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class DocumentHighlightOptions
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