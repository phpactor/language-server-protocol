<?php

namespace LanguageServerProtocol;

class Location
{
    /**
     *
     * @var string
     */
    public $uri;

    /**
     *
     * @var Range
     */
    public $range;

    /**
     * @param string $uri
     * @param Range $range
     */
    public function __construct(string $uri, Range $range)
    {
        $this->uri = $uri;
        $this->range = $range;
    }
}