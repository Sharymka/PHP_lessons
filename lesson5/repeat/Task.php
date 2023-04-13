<?php

namespace repeat;

class Task
{
private string $description;
private \DateTime $dateCreated;
private \DateTime $dateUpdated;
private \DateTime $dateDone;
private int $priority;
private bool $isDone;
private User $user;
private array $comments;

function __construct(string $description, int $priority, User $user){
    $this->description = $description;
    $this->priority = $priority;
    $this->dateCreated = new \DateTime();
    $this->user = $user;
    $this->comments = [];
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
     * @return \DateTime
     */
    public function getDateCreated(): \DateTime
    {
        return $this->dateCreated;
    }

    /**
     * @return \DateTime
     */
    public function getDateUpdated(): \DateTime
    {
        return $this->dateUpdated;
    }

    /**
     * @param \DateTime $dateUpdated
     */
    public function setDateUpdated(\DateTime $dateUpdated): void
    {
        $this->dateUpdated = $dateUpdated;
    }

    /**
     * @return \DateTime
     */
    public function getDateDone(): \DateTime
    {
        return $this->dateDone;
    }

    /**
     * @param \DateTime $dateDone
     */
    public function setDateDone(\DateTime $dateDone): void
    {
        $this->dateDone = $dateDone;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
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

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return Comments
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @param Comments $comments
     */
    public function setComments(array $comments): void
    {
        $this->comments = $comments;
    }


    public function markAsDone(){
        $this->isDone = true;
        $this->dateUpdated = new \DateTime();
        $this->dateDone = $this->dateUpdated;
    }

   public  function addComment(Comments $comment){
        $date = new \DateTime();
        $formattedDate = $date->format('Y-m-d H:i:s');
        $this->comments[$formattedDate] = $comment;
    }
}