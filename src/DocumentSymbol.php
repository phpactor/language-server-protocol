<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * Represents programming constructs like variables, classes, interfaces etc.
 * that appear in a document. Document symbols can be hierarchical and they
 * have two ranges: one that encloses its definition and one that points to
 * its most interesting range, e.g. the range of an identifier.
 */
class DocumentSymbol
{
    /**
     * The name of this symbol. Will be displayed in the user interface and therefore must not be
     * an empty string or a string only consisting of white spaces.
     *
     * @var string
     */
    public $name;

    /**
     * More detail for this symbol, e.g the signature of a function.
     *
     * @var string|null
     */
    public $detail;

    /**
     * The kind of this symbol.
     *
     * @var 1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26
     */
    public $kind;

    /**
     * Indicates if this symbol is deprecated.
     *
     * @var bool|null
     */
    public $deprecated;

    /**
     * The range enclosing this symbol not including leading/trailing whitespace but everything else
     * like comments. This information is typically used to determine if the the clients cursor is
     * inside the symbol to reveal in the symbol in the UI.
     *
     * @var Range
     */
    public $range;

    /**
     * The range that should be selected and revealed when this symbol is being picked, e.g the name of a function.
     * Must be contained by the the `range`.
     *
     * @var Range
     */
    public $selectionRange;

    /**
     * Children of this symbol, e.g. properties of a class.
     *
     * @var array<DocumentSymbol>|null
     */
    public $children;

    /**
     * @param string $name
     * @param string|null $detail
     * @param 1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26 $kind
     * @param bool|null $deprecated
     * @param Range $range
     * @param Range $selectionRange
     * @param array<DocumentSymbol>|null $children
     */
    public function __construct(string $name, $kind, Range $range, Range $selectionRange, ?string $detail = null, ?bool $deprecated = null, ?array $children = null)
    {
        $this->name = $name;
        $this->detail = $detail;
        $this->kind = $kind;
        $this->deprecated = $deprecated;
        $this->range = $range;
        $this->selectionRange = $selectionRange;
        $this->children = $children;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'range' => [Range::class],
            'selectionRange' => [Range::class],
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