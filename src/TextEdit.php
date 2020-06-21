<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * A text edit applicable to a text document.
 */
class TextEdit
{
    /**
     * The range of the text document to be manipulated. To insert
     * text into a document create a range where start === end.
     *
     * @var Range
     */
    public $range;

    /**
     * The string to be inserted. For delete operations use an
     * empty string.
     *
     * @var string
     */
    public $newText;

    /**
     * @param Range $range
     * @param string $newText
     */
    public function __construct(Range $range, string $newText)
    {
        $this->range = $range;
        $this->newText = $newText;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'range' => [Range::class],
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