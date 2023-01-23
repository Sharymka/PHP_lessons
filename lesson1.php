<?php
$name = readline("Как вас зовут? ");
$age = readline('Сколько вам лет? ' );
echo("Вас зовут $name, вам $age лет  " . PHP_EOL);

echo ("Важные дела запланированные на день:" . PHP_EOL);
$task1ForDay = readline("Какая задача стоит перед вами сегодня? ");
$task1Time = readline("Сколько примерно времени эта задача займет? ");

$task2ForDay = readline("Какая задача стоит перед вами сегодня? ");
$task2Time = readline("Сколько примерно времени эта задача займет? ");

$task3ForDay = readline("Какая задача стоит перед вами сегодня? ");
$task3Time = readline("Сколько примерно времени эта задача займет? ");

echo ("$name сегодня у вас запланировано 3 приоритетных задачи на день: " . PHP_EOL .
      "-$task1ForDay($task1Time)" . PHP_EOL .
      "-$task2ForDay($task2Time)" . PHP_EOL .
      "-$task3ForDay($task3Time)" . PHP_EOL);
