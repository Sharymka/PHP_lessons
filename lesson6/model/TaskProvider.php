<?php
require 'model/Task.php';

class TaskProvider
{

    private static array $taskList = [];

    /**
     * @return array
     */
    public static function getTaskList(): array
    {
        return self::$taskList;
    }

    public function getUnDoneList(): array {
       return  array_filter(self::$taskList, 'checkIsDone');
    }

    public function checkIsDone($task): bool {
        if($task->getIsDone() === false) {
            return true;
        }
        return false;
    }

    public static function addTask(string $taskName): Task {
//        echo 'Я добавляю' . $taskName;
        return new Task($taskName);
    }
}

