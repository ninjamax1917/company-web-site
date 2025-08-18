<?php

namespace App\Kernel\Http;

/**
 * Класс Request инкапсулирует данные HTTP-запроса
 * и предоставляет удобные методы для их получения.
 */
class Request
{
    /**
     * @param  array  $get  Данные GET-запроса ($_GET)
     * @param  array  $post  Данные POST-запроса ($_POST)
     * @param  array  $server  Данные сервера ($_SERVER)
     * @param  array  $files  Загруженные файлы ($_FILES)
     * @param  array  $cookies  Куки ($_COOKIE)
     * @param  array  $session  Сессия ($_SESSION)
     */
    public function __construct(
        public readonly array $get,
        public readonly array $post,
        public readonly array $server,
        public readonly array $files,
        public readonly array $cookies,
        public readonly array $session,
    ) {}

    /**
     * Создаёт объект Request, заполняя его данными из глобальных переменных.
     *
     * @return static Новый экземпляр Request, заполненный из глобальных массивов
     */
    public static function createFromGlobals(): static
    {
        return new static(
            $_GET,
            $_POST,
            $_SERVER,
            $_FILES,
            $_COOKIE,
            $_SESSION ?? [] // Не забыть про сессии
        );
    }

    /**
     * Возвращает URI запроса без query string.
     *
     * @return string URI (например, /about)
     */
    public function uri(): string
    {
        return strtok($this->server['REQUEST_URI'], '?');
    }

    /**
     * Возвращает HTTP-метод запроса (GET, POST, и т.д.).
     *
     * @return string Метод запроса
     */
    public function method(): string
    {
        return $this->server['REQUEST_METHOD'];
    }
}
