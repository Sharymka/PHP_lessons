<?php

class UserProvider
{
  private  PDO $pdo;

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
            'password'=> md5($password)
        ]);
    }

    public function getByUsernameAngPassword(string $username, string $password) {
        $statement = $this->pdo->prepare("SELECT id, name, username FROM users WHERE username = :username AND password = :password LIMIT 1");
        $statement->execute([
            'username' => $username,
            'password' => md5($password),
        ]);

        return $statement->fetchObject(User::class, [$username])?: null;
    }
}