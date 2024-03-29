<?php

class TaskProvider
{

    private  PDO $pdo;


    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

   public function getList(int $userId): array
   {
       $selectStatement = $this->pdo->prepare("SELECT * FROM tasks WHERE idUser = :idUser ");
       $selectStatement->execute([
           'idUser' => $userId
       ]);

       $tasks = [];

       while ($task = $selectStatement->fetchObject(Task::class)) {
           $tasks[] = $task;
       }


       return  $tasks;
   }

    public function getUndoneList(int $userId): array
    {
        $selectStatement = $this->pdo->prepare("SELECT (id, description, idUser, isDone)  FROM tasks WHERE isDone = :isDone");
        $selectStatement->execute([
            'isDone' => 0
        ]);

        $tasks = [];
        while ($task = $selectStatement->fetchObject(Task::class)) {
            $tasks[] = $task;
        }

        return  $tasks;
    }

    public function addTask(string $taskName, int $userId): bool
    {
        $query = "INSERT INTO tasks (description, idUser, isDone) VALUES (:description, :idUser, :isDone)";
        $insertStatement = $this->pdo->prepare($query);
        return $insertStatement->execute(['description' => $taskName, 'idUser' => $userId, 'isDone' => 0]);
    }

    public function completeTask(int $taskId) {
        $query = "UPDATE tasks SET isDone = true WHERE id = :id ";
        $statement = $this->pdo->prepare($query);
        $params = [
            'id' => $taskId,
        ];

        $statement->execute($params);
    }
}

