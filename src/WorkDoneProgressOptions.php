<?php

namespace LanguageServerProtocol;

class WorkDoneProgressOptions
{
    /**
     *
     * @var string|null
     */
    public $workDoneProgress;

    /**
     * @param string|null $workDoneProgress
     */
    public function __construct(?string $workDoneProgress)
    {
        $this->workDoneProgress = $workDoneProgress;
    }
}