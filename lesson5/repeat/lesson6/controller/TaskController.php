<?php


use model\TaskProvider;
use model\Task;

require_once 'model/TaskProvider.php';
require_once 'model/Task.php';

session_start();


if(!isset($_SESSION['user'])) {
    header('Location: /');
    die;
}
$taskProvider = new TaskProvider();

if(isset($_GET['action']) && $_GET['action'] == 'add') {
    var_dump($_POST['task']);
    ['task'=> $description] = $_POST;

    $taskProvider->addTask(new Task($description));
    header('Location: /?controller=todo');
    die;
}

if(isset($_GET['action']) && $_GET['action'] == 'done') {
    foreach ($_SESSION['tasks'] as $key => $task) {
        if($key == $_GET['key']) {
            $task->setIsDone(true);
        }
    }
}


$tasks = $taskProvider->getUndoneList();

require_once 'view/todoList.php';