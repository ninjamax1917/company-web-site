<?php

namespace App\Controllers;

class PagesController
{
    public function projectDesign(): void
    {
        include_once APP_PATH.'/views/pages/project-design.view.php';
    }

    public function electricity(): void
    {
        include_once APP_PATH.'/views/pages/electricity.view.php';
    }

    public function fireAlarm(): void
    {
        include_once APP_PATH.'/views/pages/fire-alarm.view.php';
    }

    public function networks(): void
    {
        include_once APP_PATH.'/views/pages/networks.view.php';
    }

    public function securityAlarm(): void
    {
        include_once APP_PATH.'/views/pages/security-alarm.view.php';
    }
}
