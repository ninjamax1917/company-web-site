index.php
<?php

define('APP_PATH', __DIR__);

require_once APP_PATH.'/vendor/autoload.php';

use App\App;

$app = new App;

$app->run();


src/App.php
<?php

namespace App;

use App\Router\Router;

class App
{
    public function run(): void
    {
        $router = new Router;

        $request =

        $uri = $_SERVER['REQUEST_URI'];

        $method = $_SERVER['REQUEST_METHOD'];

        $router->dispatch($uri, $method);

    }
}

src/Controllers/CCTVController.php
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

src/Controllers/HomeController.php
<?php

namespace App\Controllers;

class HomeController
{
    public function index(): void
    {
        include_once APP_PATH.'/views/pages/main.view.php';
    }
}

src/Controllers/PagesController.php
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

src/Http/Request.php
<?php

namespace App\Http;

class Request
{
    public function __construct(
        public readonly array $get,
        public readonly array $post,
        public readonly array $server,
        public readonly array $files,
        public readonly array $cookies,
        public readonly array $session,
    ) {}

    public static function createFromGlobals(): static
    {
        return new static(
            $_GET,
            $_POST,
            $_SERVER,
            $_FILES,
            $_COOKIE,
            $_SESSION
        );
    }
}

src/Router/Route.php
<?php

namespace App\Router;

class Route
{
    public function __construct(
        private string $uri,
        private string $method,
        private $action
    ) {}

    public static function get(string $uri, $action): static
    {
        return new static($uri, 'GET', $action);
    }

    public static function post(string $uri, $action): static
    {
        return new static($uri, 'POST', $action);
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getAction(): mixed
    {
        return $this->action;
    }
}

src/Router/Router.php
<?php

namespace App\Router;

class Router
{
    private $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function __construct()
    {
        $this->initRoutes();
    }

    public function dispatch(string $uri, string $method): void
    {
        $route = $this->findRoute($uri, $method);

        if (! $route) {
            $this->notFound();
        }

        if (is_array($route->getAction())) {
            [$controller, $action] = $route->getAction();

            $controller = new $controller;

            call_user_func([$controller, $action]);

        } else {
            call_user_func($route->getAction());
        }
    }

    private function notFound(): void
    {
        echo '404 | Not Found';
        exit;
    }

    private function findRoute(string $uri, string $method): Route|false
    {
        if (! isset($this->routes[$method][$uri])) {
            return false;
        }

        return $this->routes[$method][$uri];

    }

    private function initRoutes(): void
    {
        $routes = $this->getRoutes();
        foreach ($routes as $route) {
            $this->routes[$route->getMethod()][$route->getUri()] = $route;
        }
    }

    /**
     * @return Route[]
     */
    private function getRoutes(): array
    {
        return require_once APP_PATH.'/config/routes.php';
    }
}

config/routes.php
<?php

use App\Controllers\CCTVController;
use App\Controllers\HomeController;
use App\Controllers\PagesController;
use App\Router\Route;

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

composer.json
{
    "name": "ninja/app",
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    },
    "authors": [
        {
            "name": "ninja"
        }
    ],
    "require-dev": {
        "laravel/pint": "^1.24",
        "symfony/var-dumper": "^7.3"
    }
}

