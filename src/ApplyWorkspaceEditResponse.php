<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * A response returned from the apply workspace edit request.
 */
class ApplyWorkspaceEditResponse
{
    /**
     * Indicates whether the edit was applied or not.
     *
     * @var bool
     */
    public $applied;

    /**
     * An optional textual description for why the edit was not applied.
     * This may be used by the server for diagnostic logging or to provide
     * a suitable error for a request that triggered the edit.
     *
     * @var string|null
     */
    public $failureReason;

    /**
     * Depending on the client's failure handling strategy `failedChange` might
     * contain the index of the change that failed. This property is only available
     * if the client signals a `failureHandlingStrategy` in its client capabilities.
     *
     * @var int|null
     */
    public $failedChange;

    /**
     * @param bool $applied
     * @param string|null $failureReason
     * @param int|null $failedChange
     */
    public function __construct(bool $applied, ?string $failureReason = null, ?int $failedChange = null)
    {
        $this->applied = $applied;
        $this->failureReason = $failureReason;
        $this->failedChange = $failedChange;
    }
}