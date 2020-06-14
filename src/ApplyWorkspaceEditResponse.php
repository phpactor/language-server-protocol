<?php

namespace LanguageServerProtocol;

class ApplyWorkspaceEditResponse
{
    /**
     * Indicates whether the edit was applied or not.
     *
     * @var string
     */
    public $applied;

    /**
     * An optional textual description for why the edit was not applied.
     * This may be used by the server for diagnostic logging or to provide
     * a suitable error for a request that triggered the edit.
     *
     * @var string
     */
    public $failureReason;

    /**
     * Depending on the client's failure handling strategy `failedChange` might
     * contain the index of the change that failed. This property is only available
     * if the client signals a `failureHandlingStrategy` in its client capabilities.
     *
     * @var int
     */
    public $failedChange;

    public function __construct(string $applied, string $failureReason, int $failedChange)
    {
        $this->applied = $applied;
        $this->failureReason = $failureReason;
        $this->failedChange = $failedChange;
    }
}