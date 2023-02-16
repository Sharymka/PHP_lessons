<?php
$name = readline("Как вас зовут? ");
$age = readline('Сколько вам лет? ' );
echo("Вас зовут $name, вам $age лет  " . PHP_EOL);

$tasksAmount = readline("Сколько задач, запланированных на день: ");
$taskForDay = [];
$taskTime = [];
$sum = 0;
for($i = 1; $i < $tasksAmount +1; $i++) {
    $taskForDay[$i-1] = readline("Какая задача №$i стоит перед вами сегодня? ");
    $taskTime[$i-1] = (int)readline("Сколько примерно времени эта задача займет? ");
}
var_dump($taskForDay);

echo ("$name сегодня у вас запланировано 3 приоритетных задачи на день:" . PHP_EOL);
for($i = 0; $i < $tasksAmount; $i++) {
    echo "-$taskForDay[$i]($taskTime[$i]ч)" . PHP_EOL;
    $sum += $taskTime[$i];
}
echo ("Примерное время выполнения плана = $sum ч");
