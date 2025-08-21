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

    public function add(): void
    {
        $this->view('admin/test/add');
    }

    public function store()
    {
        $validation = $this->getRequest()->validate([
            'name' => ['required', 'min:3', 'max:50'],
        ]);

        if (! $validation) {
            foreach ($this->getRequest()->errors() as $field => $errors) {
                $this->getSession()->setSession($field, $errors);
            }
            $this->redirect('/admin/test/add');
        }

    }
}
