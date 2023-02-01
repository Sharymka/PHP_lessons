<?php
//$name = readline("Как вас зовут? ");
//$age = readline('Сколько вам лет? ' );
//echo("Вас зовут $name, вам $age лет  " . PHP_EOL);

do {
    $tasksAmount = (int)readline("Сколько задач, запланированных на день: ");
    var_dump($tasksAmount);
    if($tasksAmount <= 0) {
        echo "Количество задач должно быть положительным целым числом!" . PHP_EOL;
    }

} while($tasksAmount <= 0);

$taskForDay = [];
$taskTime = [];
$sum = 0;
for($i = 0; $i < $tasksAmount; $i++) {

    $taskForDay[$i] = readline("Какая задача стоит перед вами сегодня? ");
    do {
        $taskTime[$i] = (int)readline("Сколько примерно времени эта задача займет? ");
        if($taskTime[$i] <= 0) {
            echo "Время выполнения должно быть положительным числом!" . PHP_EOL;
        }
    } while($taskTime[$i] <= 0);
}

//echo ("$name сегодня у вас запланировано $tasksAmount приоритетных задачи на день:" . PHP_EOL);

for($i = 0; $i < $tasksAmount; $i++) {
    echo "-$taskForDay[$i]($taskTime[$i]ч)" . PHP_EOL;
    $sum += $taskTime[$i];
}
echo ("Примерное время выполнения плана = $sum ч");
