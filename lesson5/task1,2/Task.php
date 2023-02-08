<?php

class Task
{
    private string $description;

    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone;
    private array $comments;

    private User $user;

    function __construct($user) {
        $this->dateCreated = new DateTime();
        $this->user = $user;
        $this->comments = [];
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->dateUpdated = new DateTime();
    }


    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return DateTime
     */
    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    /**
     * @return DateTime
     */
    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }

    /**
     * @return DateTime
     */
    public function getDateDone(): DateTime
    {
        return $this->dateDone;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @return bool
     */
    public function isDone(): bool
    {
        return $this->isDone;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function markAsDone(): void {
        $this->dateDone = new DateTime();
        $this->dateUpdated = $this->dateDone;
        $this->isDone = true;
    }


    public function addComment($comment){
        $this->comments[]=$comment;
    }

}