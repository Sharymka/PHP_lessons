<?php

class Task
{
    public string $description;
    public bool $isDone;

    public int $id;


    public function __construct($description) {
        $this->description = $description;
        $this->isDone = false;
        $this->id = time();

    }


    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    /**
     * @param bool $isDone
     */
    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }

}