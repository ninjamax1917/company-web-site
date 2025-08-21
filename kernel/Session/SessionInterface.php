<?php

namespace App\Kernel\Session;

interface SessionInterface
{
    public function setSession(string $key, $value): void;

    public function getSession(string $key, $default = null): mixed;

    public function removeSession(string $key): void;

    public function getFlash(string $key, $default = null): mixed;

    public function has(string $key): bool;

    public function destroy(): void;
}
