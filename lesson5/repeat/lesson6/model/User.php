<?php

namespace model;

class User
{
private string $username;
private array $tasks;

    public function __construct(string $username) {
        $this->username = $username;
        $this->tasks = [];
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return array
     */
    public function getTasks(): array
    {
        return $this->tasks;
    }

    /**
     * @param array $tasks
     */
    public function setTasks(array $tasks): void
    {
        $this->tasks = $tasks;
    }


}