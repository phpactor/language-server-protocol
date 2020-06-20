<?php

namespace LanguageServerProtocol;

/**
 * A code lens represents a [command](#Command) that should be shown along with
 * source text, like the number of references, a way to run tests, etc.
 * 
 * A code lens is _unresolved_ when no command is associated to it. For performance
 * reasons the creation of a code lens and resolving should be done to two stages.
 */
class CodeLens
{
    /**
     * The range in which this code lens is valid. Should only span a single line.
     *
     * @var Range
     */
    public $range;

    /**
     * The command this code lens represents.
     *
     * @var Command|null
     */
    public $command;

    /**
     * An data entry field that is preserved on a code lens item between
     * a [CodeLensRequest](#CodeLensRequest) and a [CodeLensResolveRequest]
     * (#CodeLensResolveRequest)
     *
     * @var mixed|null
     */
    public $data;

    /**
     * @param Range $range
     * @param Command|null $command
     * @param mixed|null $data
     */
    public function __construct(Range $range, ?Command $command = null, $data)
    {
        $this->range = $range;
        $this->command = $command;
        $this->data = $data;
    }
}