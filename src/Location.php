<?php

namespace LanguageServerProtocol;

class Location
{
    /**
     *
     * @var DocumentUri
     */
    public $uri;

    /**
     *
     * @var Range
     */
    public $range;

    public function __construct(DocumentUri $uri, Range $range)
    {
        $this->$uri = $this->$uri;
        $this->$range = $this->$range;
    }
}