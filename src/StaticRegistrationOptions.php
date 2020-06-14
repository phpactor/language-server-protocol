<?php

namespace LanguageServerProtocol;

class StaticRegistrationOptions
{
    /**
     * The id used to register the request. The id can be used to deregister
     * the request again. See also Registration#id.
     *
     * @var string|null
     */
    public $id;

    /**
     * @param string|null $id
     */
    public function __construct(?string $id)
    {
        $this->id = $id;
    }
}