<?php

namespace App\Kernel\Session;

class Session
{
    public function __construct()
    {
        session_start();
    }

    public function setSession(string $key, $value): void
    {
        $_SESSION[$key] = $value;
    }

    public function getSession(string $key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    public function getFlash(string $key, $default = null)
    {
        $value = $this->getSession($key, $default);
        $this->remove($key);

        return $value;
    }

    public function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    public function remove(string $key): void
    {
        unset($_SESSION[$key]);
    }

    public function destroy(): void
    {
        session_destroy();
    }
}
