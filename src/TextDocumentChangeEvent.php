<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * undefined
 */
class TextDocumentChangeEvent
{
    /**
     * The document that has changed.
     *
     * @var TextDocument
     */
    public $document;

    /**
     * @param TextDocument $document
     */
    public function __construct(TextDocument $document)
    {
        $this->document = $document;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}