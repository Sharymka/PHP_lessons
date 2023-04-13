<?php

namespace repeat;

class User
{
    private string $username;
    private string $email;
    private ?string $sex;
    private ?int $age;
    private \DateTime $dateCreated;

    function __construct(string $username, string $email, string $sex ) {
        $this->username = $username;
        $this->email = $email;
        $this->sex = $sex;
    }

}