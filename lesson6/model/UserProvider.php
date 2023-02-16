<?php

class UserProvider
{
//    private array $accounts = [
//        'geekbrains' => 'password123',
//    ];

  private  PDO $pdo;

//    public function getByUsernameAngPassword(string $username, string $password): ?User {
//        $expectedPassword = $this -> accounts[$username]?? null;
//            if($expectedPassword === $password) {
//                return new User($username);
//            }
//        return null;
//    }
    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function registerUser(User $user, string $password): bool{
        $statement = $this->pdo->prepare("INSERT INTO `users` (name, username, password) VALUES (:name, :username,:password)");
        return $statement->execute([
            'name' => $user->getName(),
            'username' => $user->getUserName(),
            'password'=> $password]);
    }

    public function getByUsernameAngPassword(string $username, string $password) {
        $statement = $this->pdo->prepare("SELECT id, name, username FROM users WHERE username = :username AND password = :password LIMIT 1");
        $statement->execute([
            'username' => $username,
            'password' => $password,
        ]);

        return $statement->fetchObject(User::class, [$username])?: null;
    }
}