<?php
namespace model;
require_once 'model/User.php';
class UserProvider
{
    private array $accounts = [
        'geekbrains' => 'password123',
    ];

    public function getByUsernameAngPassword(string $username, string $password): ?User {
        $expectedPassword = $this -> $this->accounts[$username]?? null;
            if($expectedPassword === $password) {
                return new User($username);
            }
        return null;
    }
}