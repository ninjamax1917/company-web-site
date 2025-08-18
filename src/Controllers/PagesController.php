<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

/**
 * Контроллер для различных информационных страниц.
 */
class PagesController extends Controller
{
    public function projectDesign(): void
    {
        $this->view('project-design');
    }

    public function electricity(): void
    {
        $this->view('electricity');
    }

    public function fireAlarm(): void
    {
        $this->view('fire-alarm');
    }

    public function networks(): void
    {
        $this->view('networks');
    }

    public function securityAlarm(): void
    {
        $this->view('security-alarm');
    }
}
