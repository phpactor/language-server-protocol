<?php

namespace LanguageServerProtocol;

class Registration
{
    /**
     * The id used to register the request. The id can be used to deregister
     * the request again.
     *
     * @var string
     */
    public $id;

    /**
     * The method to register for.
     *
     * @var string
     */
    public $method;

    /**
     * Options necessary for the registration.
     *
     * @var mixed
     */
    public $registerOptions;

    public function __construct(string $id, string $method, null $registerOptions)
    {
        $this->id = $id;
        $this->method = $method;
        $this->registerOptions = $registerOptions;
    }
}