<?php
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Николаева Татьяна' => 5,
        'Никульченко Николай' => 2,
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Петров Александр' => 3,
        'Сидоров Николай' => 2,
        'Смирнов Анатолий' => 5,
        'Миронова Ольга' => 2,

    ],
    'КП10' => [
        'Петросян Андрей' => 5,
        'Анохин Александр' => 4,
        'Апраксин Николай' => 5,
        'Калугина Анна' => 5,
        'Квасова Марина' => 2,

    ]

];

foreach ($students as $key => $group) {
    $sum = 0;
    $average = 0;
    foreach ($group as $grade) {
        $sum += $grade;
    }
    $average = $sum/count($group);
    $ave_grades[$key] = $average;
}

$max = $ave_grades['ИТ20'];
$result = [];

foreach ($ave_grades as $key => $grade) {
    if ($grade > $max ) {
        $max = $grade;
        $result[$key] = $max;
    }
}

echo "Максимальная успеваемость $result[$key] у группы $key" . PHP_EOL;

///////////////////////////////////////////////////////////
$list1 = [];
$list2 = [];
foreach ($students as $key1 => $group) {
//    $list2[$key] = $list1;
    foreach ($group as $key2 => $grade) {
        if ($grade < 3) {
            $list1[$key2] = $grade;
        }
    }
    if(count($list1) != 0 ) {
        $list2[$key1] = $list1;
    }
}
print_r($list2);