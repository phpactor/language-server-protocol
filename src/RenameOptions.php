<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressOptions
 */
class RenameOptions
{
    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * Renames should be checked and tested before being executed.
     *
     * @var bool|null
     */
    public $prepareProvider;

    /**
     * @param bool|null $workDoneProgress
     * @param bool|null $prepareProvider
     */
    public function __construct(?bool $workDoneProgress, ?bool $prepareProvider)
    {
        $this->workDoneProgress = $workDoneProgress;
        $this->prepareProvider = $prepareProvider;
    }
}