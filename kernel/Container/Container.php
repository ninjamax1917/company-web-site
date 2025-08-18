<?php

namespace App\Kernel\Container;

use App\Kernel\Http\Request;
use App\Kernel\Router\Router;
use App\Kernel\View\View;

/**
 * Контейнер сервисов приложения.
 *
 * Сохраняет и предоставляет доступ к основным сервисам, таким как HTTP-запрос и роутер.
 * Используется для управления зависимостями и повторного использования сервисов в приложении.
 *
 * @property-read Request $request HTTP-запрос, созданный из глобальных переменных.
 * @property-read Router $router Маршрутизатор приложения.
 */
class Container
{
    public readonly Request $request;

    public readonly Router $router;

    public readonly View $view;

    public function __construct()
    {
        $this->registerServices();
    }

    /**
     * Регистрация сервисов в контейнере.
     */
    private function registerServices(): void
    {
        $this->request = Request::createFromGlobals();

        $this->view = new View;

        $this->router = new Router($this->view);
    }
}
