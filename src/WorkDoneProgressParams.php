<?php

namespace LanguageServerProtocol;

class WorkDoneProgressParams
{
    /**
     * An optional token that a server can use to report work done progress.
     *
     * @var ProgressToken
     */
    public $workDoneToken;

    public function __construct(ProgressToken $workDoneToken)
    {
        $this->workDoneToken = $workDoneToken;
    }
}