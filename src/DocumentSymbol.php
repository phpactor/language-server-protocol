<?php

namespace LanguageServerProtocol;

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
     * @var string
     */
    public $detail;

    /**
     * The kind of this symbol.
     *
     * @var SymbolKind
     */
    public $kind;

    /**
     * Indicates if this symbol is deprecated.
     *
     * @var string
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
     * @var array<DocumentSymbol>
     */
    public $children;

    public function __construct(string $name, string $detail, SymbolKind $kind, string $deprecated, Range $range, Range $selectionRange, array $children)
    {
        $this->$name = $this->$name;
        $this->$detail = $this->$detail;
        $this->$kind = $this->$kind;
        $this->$deprecated = $this->$deprecated;
        $this->$range = $this->$range;
        $this->$selectionRange = $this->$selectionRange;
        $this->$children = $this->$children;
    }
}