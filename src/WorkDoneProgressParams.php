<?php

namespace LanguageServerProtocol;

class WorkDoneProgressParams
{
    /**
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

    /**
     * @param int|string|null $workDoneToken
     */
    public function __construct($workDoneToken)
    {
        $this->workDoneToken = $workDoneToken;
    }
}