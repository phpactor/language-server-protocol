<?php

namespace LanguageServerProtocol;

class WorkDoneProgressBegin
{
    /**
     *
     * @var 'begin'
     */
    public $kind;

    /**
     * Mandatory title of the progress operation. Used to briefly inform about
     * the kind of operation being performed.
     * 
     * Examples: "Indexing" or "Linking dependencies".
     *
     * @var string
     */
    public $title;

    /**
     * Controls if a cancel button should show to allow the user to cancel the
     * long running operation. Clients that don't support cancellation are allowed
     * to ignore the setting.
     *
     * @var bool|null
     */
    public $cancellable;

    /**
     * Optional, more detailed associated progress message. Contains
     * complementary information to the `title`.
     * 
     * Examples: "3/25 files", "project/src/module2", "node_modules/some_dep".
     * If unset, the previous progress message (if any) is still valid.
     *
     * @var string|null
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
     * @var int|null
     */
    public $percentage;

    /**
     * @param 'begin' $kind
     * @param string $title
     * @param bool|null $cancellable
     * @param string|null $message
     * @param int|null $percentage
     */
    public function __construct(string $title, $kind, ?bool $cancellable = null, ?string $message = null, ?int $percentage = null)
    {
        $this->kind = $kind;
        $this->title = $title;
        $this->cancellable = $cancellable;
        $this->message = $message;
        $this->percentage = $percentage;
    }
}