<?php

namespace App\Controllers;

class CCTVController
{
    public function cctv(): void
    {
        include_once APP_PATH.'/views/pages/cctv.view.php';
    }

    public function cityCctv(): void
    {
        include_once APP_PATH.'/views/pages/city-cctv.view.php';
    }
}
