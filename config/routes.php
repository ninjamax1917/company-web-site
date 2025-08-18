<?php

use App\Controllers\CCTVController;
use App\Controllers\HomeController;
use App\Controllers\PagesController;
use App\Kernel\Router\Route;

/**
 * Определение маршрутов.
 *
 * @return list<Route>
 */

return [

    Route::get('/main', [HomeController::class, 'index']),

    Route::get('/cctv', [CCTVController::class, 'cctv']),

    Route::get('/city-cctv', [CCTVController::class, 'cityCctv']),

    Route::get('/project-design', [PagesController::class, 'projectDesign']),

    Route::get('/electricity', [PagesController::class, 'electricity']),

    Route::get('/fire-alarm', [PagesController::class, 'fireAlarm']),

    Route::get('/networks', [PagesController::class, 'networks']),

    Route::get('/security-alarm', [PagesController::class, 'securityAlarm']),
];
