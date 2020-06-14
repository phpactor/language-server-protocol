<?php

namespace LanguageServerProtocol;

class WorkDoneProgressOptions
{
    /**
     *
     * @var string
     */
    public $workDoneProgress;

    /**
     * @param string $workDoneProgress
     */
    public function __construct(string $workDoneProgress)
    {
        $this->workDoneProgress = $workDoneProgress;
    }
}