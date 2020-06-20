<?php

namespace LanguageServerProtocol;

/**
 * General parameters to unregister a request or notification.
 */
class Unregistration
{
    /**
     * The id used to unregister the request or notification. Usually an id
     * provided during the register request.
     *
     * @var string
     */
    public $id;

    /**
     * The method to unregister for.
     *
     * @var string
     */
    public $method;

    /**
     * @param string $id
     * @param string $method
     */
    public function __construct(string $id, string $method)
    {
        $this->id = $id;
        $this->method = $method;
    }
}