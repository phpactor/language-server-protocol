<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * The parameters send in a open text document notification
 */
class DidOpenTextDocumentParams
{
    /**
     * The document that was opened.
     *
     * @var TextDocumentItem
     */
    public $textDocument;

    /**
     * @param TextDocumentItem $textDocument
     */
    public function __construct(TextDocumentItem $textDocument)
    {
        $this->textDocument = $textDocument;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'textDocument' => [TextDocumentItem::class],
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