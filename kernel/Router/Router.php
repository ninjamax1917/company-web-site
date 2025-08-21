<?php

namespace App\Kernel\Router;

use App\Kernel\Controller\Controller;
use App\Kernel\Http\Redirect;
use App\Kernel\Http\RedirectInterface;
use App\Kernel\Http\Request;
use App\Kernel\Http\RequestInterface;
use App\Kernel\Session\SessionInterface;
use App\Kernel\View\View;
use App\Kernel\View\ViewInterface;

/**
 * Очень маленький HTTP-маршрутизатор, который сопоставляет URI с контроллерами/действиями для методов GET/POST.
 *
 * Пример использования:
 *   $router = new Router($view);
 *   $router->dispatch('/main', 'GET');
 *
 * @property View $view Экземпляр класса View для передачи контроллерам.
 * @property Request $request Экземпляр класса Request для передачи контроллерам.
 * @property Redirect $redirect Экземпляр класса Redirect для передачи контроллерам.
 */
class Router implements RouterInterface
{
    /**
     * Массив маршрутов, сгруппированных по HTTP-методу.
     *
     * @var array{
     *   GET: array<string, Route>,
     *   POST: array<string, Route>
     * }
     */
    private $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function __construct(
        private ViewInterface $view,
        private RequestInterface $request,
        private RedirectInterface $redirect,
        private SessionInterface $session,
    ) {
        $this->initRoutes();
    }

    /**
     * Отправляет запрос к соответствующему действию маршрута.
     * Если маршрут не найден — выводит 404 и завершает выполнение.
     *
     * @param  string  $uri  URI запроса (например: '/main')
     * @param  string  $method  HTTP-метод (GET, POST)
     * @return void
     */
    public function dispatch(string $uri, string $method): void
    {
        $route = $this->findRoute($uri, $method);

        if (! $route) {
            $this->notFound();
        }

        if (is_array($route->getAction())) {
            [$controller, $action] = $route->getAction();

            /** @var Controller $controller */
            $controller = new $controller;

            call_user_func([$controller, 'setView'], $this->view);
            call_user_func([$controller, 'setRequest'], $this->request);
            call_user_func([$controller, 'setRedirect'], $this->redirect);
            call_user_func([$controller, 'setSession'], $this->session);

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
     * Ищет маршрут по URI и методу.
     *
     * @param  string  $uri
     * @param  string  $method
     * @return Route|false Найденный маршрут или false, если не найден
     */
    private function findRoute(string $uri, string $method): Route|false
    {
        if (! isset($this->routes[$method][$uri])) {
            return false;
        }

        return $this->routes[$method][$uri];

    }

    /**
     * Инициализирует маршруты из конфигурационного файла.
     *
     * @return void
     */
    private function initRoutes(): void
    {
        $routes = $this->getRoutes();
        foreach ($routes as $route) {
            $this->routes[$route->getMethod()][$route->getUri()] = $route;
        }
    }

    /**
     * Получает список маршрутов из конфигурационного файла.
     *
     * @return list<Route>
     */
    private function getRoutes(): array
    {
        return require_once APP_PATH.'/config/routes.php';
    }
}
