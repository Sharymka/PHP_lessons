<?php

namespace model;

require_once 'Task.php';
class TaskProvider
{
    private array $tasks;



    function __construct(){
       $this->tasks = $_SESSION['tasks']?? [];
    }
    /**
     * @return array
     */
    public function getTasks(): array
    {
        return $this->tasks;
    }

    public function addTask(Task $task){
        $_SESSION['tasks'][] = $task;
    }

    public  function getUndoneList() {
        return array_filter($this->tasks,
            function (Task $task) {return $task->isDone() == false;}
        );
    }
}