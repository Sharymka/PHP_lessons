<?php

require 'Comment.php';
require 'User.php';
require 'Task.php';
class TaskService
{
    static function addComment(User $user, Task $task, string $comment) {
       $task->addComment( new Comment($user, $task, $comment));
    }
}

$user = new User('Иван', 'Ivan@mail.ru', 'man', 34);
//echo $user->getUsername();
$task = new Task($user, 1, 'Description');
TaskService::addComment($user, $task,'done first part');

//var_dump($task);
print_r($task);