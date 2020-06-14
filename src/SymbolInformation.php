<?php

namespace LanguageServerProtocol;

class SymbolInformation
{
    /**
     * The name of this symbol.
     *
     * @var string
     */
    public $name;

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
     * The location of this symbol. The location's range is used by a tool
     * to reveal the location in the editor. If the symbol is selected in the
     * tool the range's start information is used to position the cursor. So
     * the range usually spans more than the actual symbol's name and does
     * normally include thinks like visibility modifiers.
     * 
     * The range doesn't have to denote a node range in the sense of a abstract
     * syntax tree. It can therefore not be used to re-construct a hierarchy of
     * the symbols.
     *
     * @var Location
     */
    public $location;

    /**
     * The name of the symbol containing this symbol. This information is for
     * user interface purposes (e.g. to render a qualifier in the user interface
     * if necessary). It can't be used to re-infer a hierarchy for the document
     * symbols.
     *
     * @var string
     */
    public $containerName;

    public function __construct(string $name, SymbolKind $kind, string $deprecated, Location $location, string $containerName)
    {
        $this->$name = $this->$name;
        $this->$kind = $this->$kind;
        $this->$deprecated = $this->$deprecated;
        $this->$location = $this->$location;
        $this->$containerName = $this->$containerName;
    }
}