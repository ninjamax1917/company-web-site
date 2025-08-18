<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

/**
 * Контроллер главной страницы сайта.
 */
class HomeController extends Controller
{
    /**
     * Отображает главную страницу.
     *
     * URL: /main
     */
    public function index(): void
    {
        $this->view('main');
    }
}
