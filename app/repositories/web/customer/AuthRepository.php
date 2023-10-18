<?php
declare(strict_types=1);

namespace App\Repositories\Web\Customer;


class AuthRepository{
    public function login(string $username, string $password): bool
    {
        return true;
    }
    public function register(array $data): bool
    {

        return true;
    }
    public function logout(): bool{
        return true;
    }
}