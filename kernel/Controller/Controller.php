<?php

namespace App\Kernel\Controller;

use App\Kernel\Http\Redirect;
use App\Kernel\Http\RedirectInterface;
use App\Kernel\Http\Request;
use App\Kernel\Http\RequestInterface;
use App\Kernel\Session\SessionInterface;
use App\Kernel\View\View;
use App\Kernel\View\ViewInterface;

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
    private ViewInterface $view;

    /**
     * Экземпляр класса Request, внедряется роутером.
     *
     * @var Request
     */
    private RequestInterface $request;

    private RedirectInterface $redirect;

    private SessionInterface $session;

    /**
     * Получить объект текущего HTTP-запроса.
     *
     * @return Request Экземпляр класса Request
     */
    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    /**
     * Внедрить объект Request (вызывается роутером).
     *
     * @param  Request  $request  Экземпляр класса Request
     * @return void
     */
    public function setRequest(RequestInterface $request): void
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
    public function setView(ViewInterface $view): void
    {
        $this->view = $view;
    }

    /**
     * Внедряет объект Redirect (вызывается роутером).
     *
     * @param  Redirect  $redirect  Экземпляр класса Redirect
     * @return void
     */
    public function setRedirect(RedirectInterface $redirect): void
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

    public function setSession(SessionInterface $session): void
    {
        $this->session = $session;
    }

    public function getSession(): SessionInterface
    {
        return $this->session;

    }
}
