<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * The data type of the ResponseError if the
 * initialize request fails.
 */
class InitializeError
{
    /**
     * Indicates whether the client execute the following retry logic:
     * (1) show the message provided by the ResponseError to the user
     * (2) user selects retry or cancel
     * (3) if user selected retry the initialize method is sent again.
     *
     * @var bool
     */
    public $retry;

    /**
     * @param bool $retry
     */
    public function __construct(bool $retry)
    {
        $this->retry = $retry;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}