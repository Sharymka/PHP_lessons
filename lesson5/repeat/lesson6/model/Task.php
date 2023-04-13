<?php

namespace model;

class Task
{
    private string $description;
    private bool $isDone;



    function __construct(string $description){
        $this->description = $description;
        $this->isDone = false;
    }


    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param bool $isDone
     */
    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }

    /**
     * @return bool
     */
    public function isDone(): bool
    {
        return $this->isDone;
    }

}