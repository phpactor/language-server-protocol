<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressOptions
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