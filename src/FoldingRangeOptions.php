<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressOptions
 */
class FoldingRangeOptions
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