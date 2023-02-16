<?php
$pdo = require 'db.php';

// Добавить новую задачу, если в параметрах запроса POST есть taskName
if(isset($_POST['taskName']) && !empty($_POST['taskName'])) {
    ['taskName' => $taskName] = $_POST;
    ['user' => $user] = $_SESSION;

    $taskProvider = new TaskProvider($pdo);
    $taskProvider->addTask($taskName, $user);
    $task = $taskProvider->getUnDoneList();

//    $_SESSION['tasks'][] = serialize($taskProvider->addTask($taskName)) ;
//    var_dump($_SESSION['tasks']);
}


// GET запрос с параметром taskId и complete будет маркировать нужную задачу как "выполненную"
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['taskId']) && boolval($_GET['complete']) === true) {
    foreach ($_SESSION['tasks'] as $key => $serializedTask) {
        $task = $serializedTask;

        if ($task->id === intval($_GET['taskId'])) {
            $task->setIsDone(true);

            $_SESSION['tasks'][$key] = $task;
            break;
        }
    }
}

require_once 'view/todo.php';