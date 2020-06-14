<?php

namespace LanguageServerProtocol;

class StaticRegistrationOptions
{
    /**
     * The id used to register the request. The id can be used to deregister
     * the request again. See also Registration#id.
     *
     * @var string
     */
    public $id;

    public function __construct(string $id)
    {
        $this->$id = $this->$id;
    }
}