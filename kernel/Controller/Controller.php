<?php

namespace App\Kernel\Controller;

use App\Kernel\Http\Redirect;
use App\Kernel\Http\Request;
use App\Kernel\Session\Session;
use App\Kernel\View\View;

/**
 * Базовый контроллер приложения.
 *
 * Все контроллеры должны наследоваться от этого класса.
 * Предоставляет стандартный механизм для подключения view-шаблонов через объект View
 * и работы с HTTP-запросом через объект Request.
 *
 * @property View $view Экземпляр класса View для вывода шаблонов.
 * @property Request $request Экземпляр класса Request для доступа к данным запроса.
 * @property Redirect $redirect Экземпляр класса Redirect для редиректов.
 */
abstract class Controller
{
    /**
     * Экземпляр класса View, внедряется роутером.
     *
     * @var View
     */
    private View $view;

    /**
     * Экземпляр класса Request, внедряется роутером.
     *
     * @var Request
     */
    private Request $request;

    private Redirect $redirect;

    private Session $session;

    /**
     * Получить объект текущего HTTP-запроса.
     *
     * @return Request Экземпляр класса Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }

    /**
     * Внедрить объект Request (вызывается роутером).
     *
     * @param  Request  $request  Экземпляр класса Request
     * @return void
     */
    public function setRequest(Request $request): void
    {
        $this->request = $request;
    }

    /**
     * Подключает view-шаблон с заданным именем.
     *
     * @param  string  $name  Имя шаблона (например: 'main')
     */
    public function view(string $name): void
    {
        $this->view->page($name);
    }

    /**
     * Внедряет объект View (вызывается роутером).
     *
     * @param  View  $view  Экземпляр класса View
     */
    public function setView(View $view): void
    {
        $this->view = $view;
    }

    /**
     * Внедряет объект Redirect (вызывается роутером).
     *
     * @param  Redirect  $redirect  Экземпляр класса Redirect
     * @return void
     */
    public function setRedirect(Redirect $redirect): void
    {
        $this->redirect = $redirect;
    }

    /**
     * Выполняет редирект на указанный URL.
     *
     * @param  string  $url  URL для перенаправления
     * @return void
     */
    public function redirect(string $url): void
    {
        $this->redirect->to($url);
    }

    public function setSession(Session $session): void
    {
        $this->session = $session;
    }

    public function getSession(): Session
    {
        return $this->session;

    }
}
