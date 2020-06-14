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
     * @var Command
     */
    public $command;

    /**
     * An data entry field that is preserved on a code lens item between
     * a [CodeLensRequest](#CodeLensRequest) and a [CodeLensResolveRequest]
     * (#CodeLensResolveRequest)
     *
     * @var mixed
     */
    public $data;

    public function __construct(Range $range, Command $command, null $data)
    {
        $this->$range = $this->$range;
        $this->$command = $this->$command;
        $this->$data = $this->$data;
    }
}