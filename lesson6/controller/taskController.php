<?php

require 'model/TaskProvider.php';

// Добавить новую задачу, если в параметрах запроса POST есть taskName
if(isset($_POST['taskName']) && !empty($_POST['taskName'])) {
    ['taskName' => $taskName] = $_POST;
    $_SESSION['tasks'][] = serialize(TaskProvider::addTask($taskName)) ;
}


// GET запрос с параметром taskId и complete будет маркировать нужную задачу как "выполненную"
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['taskId']) && boolval($_GET['complete']) === true) {
    foreach ($_SESSION['tasks'] as $key => $serializedTask) {
        $task = unserialize($serializedTask);

        if ($task->id === intval($_GET['taskId'])) {
            $task->setIsDone(true);

            $_SESSION['tasks'][$key] = serialize($task);
            break;
        }
    }
}

require_once 'view/todo.php';