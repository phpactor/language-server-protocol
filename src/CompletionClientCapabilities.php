<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * Completion client capabilities
 */
class CompletionClientCapabilities
{
    /**
     * Whether completion supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * The client supports the following `CompletionItem` specific
     * capabilities.
     *
     * @var array<mixed>|null
     */
    public $completionItem;

    /**
     *
     * @var array<mixed>|null
     */
    public $completionItemKind;

    /**
     * The client supports to send additional context information for a
     * `textDocument/completion` requestion.
     *
     * @var bool|null
     */
    public $contextSupport;

    /**
     * @param bool|null $dynamicRegistration
     * @param array<mixed>|null $completionItem
     * @param array<mixed>|null $completionItemKind
     * @param bool|null $contextSupport
     */
    public function __construct(?bool $dynamicRegistration = null, ?array $completionItem = null, ?array $completionItemKind = null, ?bool $contextSupport = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->completionItem = $completionItem;
        $this->completionItemKind = $completionItemKind;
        $this->contextSupport = $contextSupport;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
        ];
        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                continue;
            }
            foreach ($map[$key] as $className) {
               try {
                   $value = Invoke::new($className, $value);
                   continue;
               } catch (Exception $e) {
                   continue;
               }
            }
        }
        return Invoke::new(self::class, $array);
    }
        
}