<?php

class TaskProvider
{

    private  PDO $pdo;

    private static array $taskList = [];

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @return array
     */
    public static function getTaskList(): array
    {
        return self::$taskList;
    }

   public function getUnDoneList(): ?Task
   {
       $selectStatement =$this->pdo->prepare("SELECT * FROM tasks WHERE isDone = :isDone");
       $selectStatement->execute([
           'isDone' => 1,
       ]);;
       return $selectStatement->fetchObject('Task') ?: null;


   }

//    public function checkIsDone($task): bool {
//        if($task->getIsDone() === false) {
//            return true;
//        }
//        return false;
//    }

    public function addTask(string $taskName, User $user)
    {

        var_dump($user->getUsername());
        $selectStatement = $this->pdo->prepare("SELECT id FROM users WHERE username = :username");
        $selectStatement->execute([
            'username' => $user->getUsername(),
        ]);

        $selectedResult = $selectStatement->fetch() ?: null;
        var_dump($selectedResult['id']);


        $insertStatement = $this->pdo->prepare("INSERT INTO tasks (description, idUser) VALUES (:description, :idUser)");
        $insertStatement->execute([
            'description' => $taskName,
            'idUser' => $selectedResult['id'],
        ]);

        $selectStatement2 = $this->pdo->prepare("SELECT description, id, idUser, isDone FROM tasks WHERE description = :description AND idUser = :idUser");
        $selectStatement2->execute([
            'description' => $taskName,
            'idUser' => $selectedResult['id'],
        ]);
        $task = $selectStatement2->fetchObject('Task') ?: null;

        return $task;
    }
}

