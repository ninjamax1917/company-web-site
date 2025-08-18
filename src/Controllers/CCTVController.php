<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

/**
 * Контроллер для страниц видеонаблюдения.
 */
class CCTVController extends Controller
{
    public function cctv(): void
    {
        $this->view('cctv');
    }

    public function cityCctv(): void
    {
        $this->view('city-cctv');
    }
}
