<?php

namespace LanguageServerProtocol;

/**
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class ImplementationOptions
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