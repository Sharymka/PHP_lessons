<?php

class Comment
{
    private User $author;
    private Task $task;
    private string $comment;

    /**
     * @return User
     */
    public function getAuthor(): User
    {
        return $this->author;
    }

    /**
     * @param User $author
     */
    public function setAuthor(User $author): void
    {
        $this->author = $author;
    }

    /**
     * @return Task
     */
    public function getTask(): Task
    {
        return $this->task;
    }

    /**
     * @param Task $task
     */
    public function setTask(Task $task): void
    {
        $this->task = $task;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $text
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }


function __construct($task, $comment) {
    $this->author = $author;
    $this->task = $task;
    $this->comment = $comment;

}
}