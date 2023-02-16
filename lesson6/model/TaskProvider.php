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

   public function getList(int $userId): array
   {
       $selectStatement = $this->pdo->prepare("SELECT id, description, idUser, isDone  FROM tasks WHERE idUser = :idUser");
       $selectStatement->execute([
           'idUser' => $userId
       ]);

       $tasks = [];
       while ($task = $selectStatement->fetchObject(Task::class)) {
           $tasks[] = $task;
       }

        return  $tasks;
   }

    public function addTask(string $taskName, int $userId): bool
    {
        $query = "INSERT INTO tasks (description, idUser) VALUES (:description, :idUser)";
        $insertStatement = $this->pdo->prepare($query);
        return $insertStatement->execute(['description' => $taskName, 'idUser' => $userId]);
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

