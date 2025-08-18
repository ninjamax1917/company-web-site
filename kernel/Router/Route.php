<?php

namespace App\Kernel\Router;

/**
 * Представляет один HTTP маршрут.
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
     * Определяет маршрут GET.
     *
     * @param  callable|ControllerAction  $action
     */
    public static function get(string $uri, $action): static
    {
        return new static($uri, 'GET', $action);
    }

    /**
     * Определяет маршрут POST.
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
