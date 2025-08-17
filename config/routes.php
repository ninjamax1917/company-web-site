<?php

use App\Router\Route;

return [

    Route::get('/main', function () {
        include_once APP_PATH.'/views/pages/main.view.php';
    }),

    Route::get('/cctv', function () {
        include_once APP_PATH.'/views/pages/cctv.view.php';
    }),

    Route::get('/city-cctv', function () {
        include_once APP_PATH.'/views/pages/city-cctv.view.php';
    }),

    Route::get('/project-design', function () {
        include_once APP_PATH.'/views/pages/project-design.view.php';
    }),

    Route::get('/electricity', function () {
        include_once APP_PATH.'/views/pages/electricity.view.php';
    }),

    Route::get('/fire-alarm', function () {
        include_once APP_PATH.'/views/pages/fire-alarm.view.php';
    }),

    Route::get('/networks', function () {
        include_once APP_PATH.'/views/pages/networks.view.php';
    }),

    Route::get('/security-alarm', function () {
        include_once APP_PATH.'/views/pages/security-alarm.view.php';
    }),

];
