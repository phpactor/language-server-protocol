<?php

namespace LanguageServerProtocol;

class WorkDoneProgressOptions
{
    /**
     *
     * @var string
     */
    public $workDoneProgress;

    public function __construct(string $workDoneProgress)
    {
        $this->workDoneProgress = $workDoneProgress;
    }
}