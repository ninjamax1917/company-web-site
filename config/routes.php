<?php

return [
    '/main' => function () {
        include_once APP_PATH.'/views/pages/main.view.php';
    },

    '/cctv' => function () {
        include_once APP_PATH.'/views/pages/cctv.view.php';
    },

    '/city-cctv' => function () {
        include_once APP_PATH.'/views/pages/city.view.php';
    },

    '/project-design' => function () {
        include_once APP_PATH.'/views/pages/project-design.view.php';
    },

    '/electricity' => function () {
        include_once APP_PATH.'/views/pages/electricity.view.php';
    },

    '/fire-alarm' => function () {
        include_once APP_PATH.'/views/pages/fire-alarm.view.php';
    },

    '/networks' => function () {
        include_once APP_PATH.'/views/pages/networks.view.php';
    },

    '/security-alarm' => function () {
        include_once APP_PATH.'/views/pages/security-alarm.view.php';
    },

];
