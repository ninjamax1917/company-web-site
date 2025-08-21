<?php

namespace App\Kernel\View;

use App\Kernel\Exceptions\ViewNotFoundException;
use App\Kernel\Session\SessionInterface;

/**
 * Класс View отвечает за подключение страниц и компонентов (view-частей) приложения.
 * Позволяет гибко и централизованно внедрять шаблоны и переиспользуемые куски интерфейса.
 */
class View implements ViewInterface
{
    public function __construct(private SessionInterface $session) {}

    /**
     * Подключает view-страницу по имени.
     *
     * Внутри подключаемого файла доступна переменная $view — текущий объект View.
     *
     * @param  string  $name  Имя страницы (без расширения и пути), например: 'main', 'cctv', 'layout'
     * @return void
     *
     * @throws ViewNotFoundException Если страница не найдена по указанному имени.
     *
     * @example
     * $view->page('main'); // подключит APP_PATH.'/views/pages/main.view.php'
     */
    public function page(string $name): void
    {

        $viewPath = APP_PATH.'/views/pages/'.$name.'.view.php';

        if (! file_exists($viewPath)) {
            throw new ViewNotFoundException("Страница '$name' не найдена");
        }

        extract($this->defaultData());

        include_once $viewPath;
    }

    /**
     * Универсально подключает view-компонент по имени.
     *
     * Сначала ищет файл components/{$name}.php,
     * если не найден — пытается найти components/{$name}/{$basename}.php,
     * где $basename — это имя файла без пути (после последнего слеша).
     * Внутри компонента также доступна переменная $view.
     *
     * Пример структуры:
     *   - components/head/head.php
     *   - components/header/logo.php
     *   - components/footer/footer.php
     *
     * @param  string  $name  Имя компонента (может быть с поддиректориями через слэш), например: 'header/logo', 'footer'
     * @return void
     *
     * @example
     * $view->components('header/logo'); // подключит APP_PATH.'/views/components/header/logo.php'
     * $view->components('footer');      // подключит APP_PATH.'/views/components/footer.php' или APP_PATH.'/views/components/footer/footer.php'
     */
    public function components(string $name): void
    {
        extract(['view' => $this]);
        $componentPath = APP_PATH.'/views/components/';
        $fileDirect = $componentPath.$name.'.php';
        $fileNested = $componentPath.$name.'/'.basename($name).'.php';

        if (file_exists($fileDirect)) {
            include_once $fileDirect;
        } elseif (file_exists($fileNested)) {
            include_once $fileNested;
        } else {
            trigger_error("Компонент '$name' не найден", E_USER_WARNING);

            return;
        }
    }

    private function defaultData(): array
    {
        return [
            'view' => $this,
            'session' => $this->session,
        ];
    }
}
