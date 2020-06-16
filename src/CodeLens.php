<?php

namespace LanguageServerProtocol;

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
    public function __construct(Range $range, ?Command $command, $data)
    {
        $this->range = $range;
        $this->command = $command;
        $this->data = $data;
    }
}