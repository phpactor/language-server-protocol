<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Server Capabilities for a [DefinitionRequest](#DefinitionRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class DefinitionOptions
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