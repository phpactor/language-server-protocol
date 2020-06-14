<?php

namespace LanguageServerProtocol;

class RegistrationParams
{
    /**
     *
     * @var array<Registration>
     */
    public $registrations;

    public function __construct(array $registrations)
    {
        $this->registrations = $registrations;
    }
}