<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

class FoldingRangeClientCapabilities
{
    /**
     * Whether implementation supports dynamic registration for folding range providers. If this is set to `true`
     * the client supports the new `FoldingRangeRegistrationOptions` return value for the corresponding server
     * capability as well.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * The maximum number of folding ranges that the client prefers to receive per document. The value serves as a
     * hint, servers are free to follow the limit.
     *
     * @var int|null
     */
    public $rangeLimit;

    /**
     * If set, the client signals that it only supports folding complete lines. If set, client will
     * ignore specified `startCharacter` and `endCharacter` properties in a FoldingRange.
     *
     * @var bool|null
     */
    public $lineFoldingOnly;

    /**
     * @param bool|null $dynamicRegistration
     * @param int|null $rangeLimit
     * @param bool|null $lineFoldingOnly
     */
    public function __construct(?bool $dynamicRegistration = null, ?int $rangeLimit = null, ?bool $lineFoldingOnly = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->rangeLimit = $rangeLimit;
        $this->lineFoldingOnly = $lineFoldingOnly;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}