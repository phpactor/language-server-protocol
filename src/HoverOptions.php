<?php

namespace LanguageServerProtocol;

/**
 * Hover options.
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class HoverOptions
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