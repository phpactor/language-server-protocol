<?php

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
    public function __construct(?bool $workDoneProgress)
    {
        $this->workDoneProgress = $workDoneProgress;
    }
}