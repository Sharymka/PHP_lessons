<?php

use repeat\Comments;
use repeat\TaskServices;
use repeat\User;
use repeat\Task;

require_once 'Task.php';
require_once 'TaskServices.php';
require_once 'User.php';
require_once 'Comments.php';

$user = new User('Ivan', 'Ivan@mail.com', 'men');
$task = new Task('Помыть полы','1', $user);
$comment = new Comments($user, $task, 'Помыть только в одной комнате на кухне');
TaskServices::addComment($task, $comment);
print_r($task->getComments());