<?php
?>

        <?php if($tasks !== null) : ?>
        <ol>
            <?php foreach ($tasks as $key => $task) : ?>
                <li>
                    <?=$task->getDescription()?>
                    <a href="?controller=todo&action=done&key=<?=$key?>">DONE</a>
                </li>
            <?php endforeach  ?>
        </ol>
        <?php endif  ?>


    <form action = "?controller=todo&action=add" method="post">
        <input type="text" name="task" placeholder="Введите задачу" />
        <input type= "submit" value="Отправить" />
    </form>
