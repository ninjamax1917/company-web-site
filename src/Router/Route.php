<?php

namespace App\Router;

/**
 * Represents a single HTTP route.
 *
 * @psalm-type ControllerAction=array{0: class-string, 1: non-empty-string}
 */
class Route
{
    /**
     * @param  'GET'|'POST'  $method
     * @param  callable|ControllerAction  $action
     */
    public function __construct(
        private string $uri,
        private string $method,
        private $action
    ) {}

    /**
     * Define a GET route.
     *
     * @param  callable|ControllerAction  $action
     */
    public static function get(string $uri, $action): static
    {
        return new static($uri, 'GET', $action);
    }

    /**
     * Define a POST route.
     *
     * @param  callable|ControllerAction  $action
     */
    public static function post(string $uri, $action): static
    {
        return new static($uri, 'POST', $action);
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @return 'GET'|'POST'
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return callable|ControllerAction
     */
    public function getAction(): mixed
    {
        return $this->action;
    }
}
