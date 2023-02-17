<?php
$pdo = require 'db.php';

['user' => $user] = $_SESSION;
$taskProvider = new TaskProvider($pdo);
$task = null;

// Добавить новую задачу, если в параметрах запроса POST есть task
if(isset($_POST['task']) && !empty($_POST['task'])) {
    ['task' => $taskName] = $_POST;
    $taskProvider->addTask($taskName, $user->id);
    $taskListForUser = $taskProvider->getList($user->id);
    $_POST['task'] = null;
}

// GET запрос с параметром taskId и complete будет маркировать нужную задачу как "выполненную"
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['taskId']) && boolval($_GET['complete']) === true) {
    $taskId = $_GET['taskId'];
    $taskProvider->completeTask($taskId);
    $taskListForUser = $taskProvider->getList($user->id);
}

require_once 'view/todo.php';