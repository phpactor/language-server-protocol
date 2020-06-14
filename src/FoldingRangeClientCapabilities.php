<?php

namespace LanguageServerProtocol;

class FoldingRangeClientCapabilities
{
    /**
     * Whether implementation supports dynamic registration for folding range providers. If this is set to `true`
     * the client supports the new `FoldingRangeRegistrationOptions` return value for the corresponding server
     * capability as well.
     *
     * @var string
     */
    public $dynamicRegistration;

    /**
     * The maximum number of folding ranges that the client prefers to receive per document. The value serves as a
     * hint, servers are free to follow the limit.
     *
     * @var int
     */
    public $rangeLimit;

    /**
     * If set, the client signals that it only supports folding complete lines. If set, client will
     * ignore specified `startCharacter` and `endCharacter` properties in a FoldingRange.
     *
     * @var string
     */
    public $lineFoldingOnly;

    /**
     * @param string $dynamicRegistration
     * @param int $rangeLimit
     * @param string $lineFoldingOnly
     */
    public function __construct(string $dynamicRegistration, int $rangeLimit, string $lineFoldingOnly)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->rangeLimit = $rangeLimit;
        $this->lineFoldingOnly = $lineFoldingOnly;
    }
}