<?php

namespace LanguageServerProtocol;

/**
 * Code Lens provider options of a [CodeLensRequest](#CodeLensRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class CodeLensOptions
{
    /**
     * Code lens has a resolve provider as well.
     *
     * @var bool|null
     */
    public $resolveProvider;

    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param bool|null $resolveProvider
     * @param bool|null $workDoneProgress
     */
    public function __construct(?bool $resolveProvider, ?bool $workDoneProgress)
    {
        $this->resolveProvider = $resolveProvider;
        $this->workDoneProgress = $workDoneProgress;
    }
}