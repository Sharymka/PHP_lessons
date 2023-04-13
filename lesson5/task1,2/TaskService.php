<?php

require 'Comment.php';
require 'User.php';
require 'Task.php';
class TaskService
{
    static function addComment(Task $task, string $comment) {
       $task->addComment( new Comment($task, $comment));
    }
}

$user = new User('Иван', 'Ivan@mail.ru', 'man', 34);
//echo $user->getUsername();
$task = new Task($user, 1, 'Description');
TaskService::addComment($task, 'done first part');

//var_dump($task);
print_r($task);