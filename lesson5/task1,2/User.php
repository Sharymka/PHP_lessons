<?php

class User
{
    private string $username;
    private string $email;
    private string $sex;
    private int $age;
    public bool $isActive = true;
    public DateTime $dateCreated;

    function __construct(string $username, string $email, string $sex, ?int $age = null)
    {
        $this->username = $username;
        $this->email = $email;
        $this->sex = $sex;
        $this->age = $age;
        $this->dateCreated = new DateTime();
    }

    function getUsername(): string
    {
        return $this->username ?? 'unknown';
    }

    private function getValidAge(?int $age): ?int
    {
        if ($age > 0 && $age <= 125) {
            return $age;
        }
        return null;
    }

    public function setAge(?int $age): void
    {
        $this->age = $this->getValidAge($age);
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

}

$user = new User('Иван', 'Ivan@mail.ru', man, 34);
echo $user->getUsername();
//var_dump($user);