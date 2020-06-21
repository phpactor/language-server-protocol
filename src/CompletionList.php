<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Represents a collection of [completion items](#CompletionItem) to be presented
 * in the editor.
 */
class CompletionList
{
    /**
     * This list it not complete. Further typing results in recomputing this list.
     *
     * @var bool
     */
    public $isIncomplete;

    /**
     * The completion items.
     *
     * @var array<CompletionItem>
     */
    public $items;

    /**
     * @param bool $isIncomplete
     * @param array<CompletionItem> $items
     */
    public function __construct(bool $isIncomplete, array $items)
    {
        $this->isIncomplete = $isIncomplete;
        $this->items = $items;
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