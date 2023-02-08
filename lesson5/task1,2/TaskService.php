<?php

require 'Comment.php';
class TaskService
{
    static function addComment(User $user, Task $task, string $text) {
       $task->addComment( new Comment($user, $task, $text));
    }


}