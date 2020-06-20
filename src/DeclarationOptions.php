<?php

namespace LanguageServerProtocol;

/**
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class DeclarationOptions
{
    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param bool|null $workDoneProgress
     */
    public function __construct(?bool $workDoneProgress)
    {
        $this->workDoneProgress = $workDoneProgress;
    }
}