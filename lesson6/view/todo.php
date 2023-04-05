<?php
/* @var $task Task */

$tasks = $_SESSION['tasks'] ?? [];
?>


<?php if(isset($tasks)): ?>
    <ol>
        <?php foreach($tasks as $serializedTask):
            $task = unserialize($serializedTask);?>

            <li><?= $task->description ?></li>

            <?php if($task->isDone) : ?>
                <span>
                    DONE
                </span>
            <?php else : ?>
                <a href=<?= "?controller=taskName&taskId=" . $task->id . "&complete=true" ?>>
                    MARK COMPLETE
                </a>
            <?php endif;?>
        <?php endforeach;?>
    </ol>
<?php endif;?>

<form method="post">
    <input type="=text" name="taskName" placeholder="Добавьте задачу">
    <button type="submit">Отправить</button>
</form>


