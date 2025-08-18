<?php

namespace App\Kernel\Controller;

use App\Kernel\View\View;

/**
 * Базовый контроллер приложения.
 *
 * Все контроллеры должны наследоваться от этого класса.
 * Предоставляет стандартный механизм для подключения view-шаблонов через объект View.
 *
 * @property View $view Экземпляр класса View для вывода шаблонов.
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
}
