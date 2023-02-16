<?php
/* @var $task Task */

//$tasks = $_SESSION['tasks'] ?? [];
?>


<?php if($task): ?>
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

<style>
    .post {
        margin-top: 10px;
    }
</style>
<a href="?action=logout">Выйти</a>
<a href="/">Главная</a>
<form method="post" class="post">
    <input type="=text" name="taskName" placeholder="Добавьте задачу">
    <button type="submit">Отправить</button>
</form>

