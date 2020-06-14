<?php

namespace LanguageServerProtocol;

class WorkDoneProgressReport
{
    /**
     *
     * @var 'report'
     */
    public $kind;

    /**
     * Controls enablement state of a cancel button. This property is only valid if a cancel
     * button got requested in the `WorkDoneProgressStart` payload.
     * 
     * Clients that don't support cancellation or don't support control the button's
     * enablement state are allowed to ignore the setting.
     *
     * @var string
     */
    public $cancellable;

    /**
     * Optional, more detailed associated progress message. Contains
     * complementary information to the `title`.
     * 
     * Examples: "3/25 files", "project/src/module2", "node_modules/some_dep".
     * If unset, the previous progress message (if any) is still valid.
     *
     * @var string
     */
    public $message;

    /**
     * Optional progress percentage to display (value 100 is considered 100%).
     * If not provided infinite progress is assumed and clients are allowed
     * to ignore the `percentage` value in subsequent in report notifications.
     * 
     * The value should be steadily rising. Clients are free to ignore values
     * that are not following this rule.
     *
     * @var int
     */
    public $percentage;

    /**
     * @param 'report' $kind
     * @param string $cancellable
     * @param string $message
     * @param int $percentage
     */
    public function __construct($kind, string $cancellable, string $message, int $percentage)
    {
        $this->kind = $kind;
        $this->cancellable = $cancellable;
        $this->message = $message;
        $this->percentage = $percentage;
    }
}