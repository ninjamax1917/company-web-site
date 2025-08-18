<?php

namespace App\Kernel\Router;

/**
 * Очень маленький HTTP-маршрутизатор, который точно соответствует URI для GET/POST.
 */
class Router
{
    /**
     * @var array{
     *   GET: array<string, Route>,
     *   POST: array<string, Route>
     * }
     */
    private $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function __construct()
    {
        $this->initRoutes();
    }

    /**
     * Отправляет запрос к соответствующему действию маршрута.
     * Отправляет ответ 404 и завершает выполнение, если маршрут не найден.
     */
    public function dispatch(string $uri, string $method): void
    {
        $route = $this->findRoute($uri, $method);

        if (! $route) {
            $this->notFound();
        }

        if (is_array($route->getAction())) {
            [$controller, $action] = $route->getAction();

            $controller = new $controller;

            call_user_func([$controller, $action]);

        } else {
            call_user_func($route->getAction());
        }
    }

    /**
     * Отправляет 404 и завершает работу скрипта.
     */
    private function notFound(): void
    {
        echo '404 | Not Found';
        exit;
    }

    /**
     * @return \App\Router\Route|false
     */
    private function findRoute(string $uri, string $method): Route|false
    {
        if (! isset($this->routes[$method][$uri])) {
            return false;
        }

        return $this->routes[$method][$uri];

    }

    private function initRoutes(): void
    {
        $routes = $this->getRoutes();
        foreach ($routes as $route) {
            $this->routes[$route->getMethod()][$route->getUri()] = $route;
        }
    }

    /**
     * @return list<Route>
     */
    private function getRoutes(): array
    {
        return require_once APP_PATH.'/config/routes.php';
    }
}
