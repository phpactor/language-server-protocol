<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressOptions
 */
class CodeLensOptions
{
    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * Code lens has a resolve provider as well.
     *
     * @var bool|null
     */
    public $resolveProvider;

    /**
     * @param bool|null $workDoneProgress
     * @param bool|null $resolveProvider
     */
    public function __construct(?bool $workDoneProgress, ?bool $resolveProvider)
    {
        $this->workDoneProgress = $workDoneProgress;
        $this->resolveProvider = $resolveProvider;
    }
}