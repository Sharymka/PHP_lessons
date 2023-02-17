<?php
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 2,
        'Иванов Кирилл' => 2
    ],
    'БАП20' => [
        'Антонов Антон' => 2,
        'Исмаилов Антон' => 3,
    ]
];

$sum = 0;
$maxAverage = 0;
$groupName = '';
$expulsionGroup = [];
foreach ($students as $group => $studentList) {
    foreach ($studentList as $FIO => $mark) {
        $sum = array_sum($studentList);
        if($mark < 3) {
            $expulsionGroup[$group][$FIO] = $mark;
        }
    }
    $average = $sum / count($studentList);
    if($average > $maxAverage) {
        $maxAverage = $average;
        $groupName = $group;
    }

}

echo "Максимальная успеваемость равная $maxAverage у группы $groupName \n";
echo "Группа на отчисление: \n ";
print_r($expulsionGroup);