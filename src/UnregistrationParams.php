<?php

namespace LanguageServerProtocol;

class UnregistrationParams
{
    /**
     *
     * @var array<Unregistration>
     */
    public $unregisterations;

    public function __construct(array $unregisterations)
    {
        $this->$unregisterations = $this->$unregisterations;
    }
}