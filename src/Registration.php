<?php

namespace LanguageServerProtocol;

/**
 * General parameters to to register for an notification or to register a provider.
 */
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
     * @var mixed|null
     */
    public $registerOptions;

    /**
     * @param string $id
     * @param string $method
     * @param mixed|null $registerOptions
     */
    public function __construct(string $method, string $id, $registerOptions)
    {
        $this->id = $id;
        $this->method = $method;
        $this->registerOptions = $registerOptions;
    }
}