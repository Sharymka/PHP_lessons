<?php
$students = [
    'БАП1320' => [ // В качестве ключей будут названия групп
        'Смирнова Христина Потаповна',
        'Рогозин Даниил Арсениевич',
        'Золин Владилен Леонтиевич',
        'Архаткина Владислава Никитевна',
        'Мещерякова Мария Елизаровна',
        'Саврасова Фаина Ивановна',
        'Хромченко Зинаида Николаевна',
        'Протасова Майя Леонидовна',
        'Протасова Майя Леонидовна'
    ],
    'ИТ1720' => [
        'Ябров Тимур Чеславович',
        'Белорусов Ефрем Изяславович',
        'Ягода Назар Прохорович',
        'Ярилова Розалия Серафимовна',
        'Нырко Платон Вадимович',
        'Калинин Агап Моисеевич',
        'Никифоров Юлиан Прокофиевич'
    ]
];

$examQueue = [];
foreach ($students as $groupName => $studentList) {
    foreach ($studentList as $studentIndex => $student) {
        if (in_array($student, $examQueue)) {
            echo "Внимание студент $student уже добавлени в список \n";
        } else {
            $examQueue[] = $student;
        }
    }
}

sort($examQueue);
print_r($examQueue);

//$currentStudent = array_shift($examQueue);
//
//while ($currentStudent) {
//    echo "В аудиеторию приглашается $currentStudent \n";
//    $currentStudent = array_shift($examQueue);
//}

$estimatedStudents = [];
while ($currentStudent = array_shift($examQueue)) {
    echo "В аудиеторию приглашается $currentStudent \n";
    $studentMark = readline("Какую оценку поставить $currentStudent?\t");

    if(empty($studentMark)) {
        break;
    }

    $estimatedStudents[$currentStudent] = $studentMark;
}

echo "Экзамен зевершен \nСписок оценок:\n";

foreach ($estimatedStudents as $student => $mark) {
    echo "- $student - $mark \n";
}
echo "\n";
echo "Студенты, еще не сдавшие экзамен:\n";

foreach ($examQueue as $student) {
    echo " - $student\n ";
}
//
//$stringStudentNames = '';
//foreach ($estimatedStudents as $studentName => $mark) {
//    if($mark < 3) {
//        $stringStudentNames = $stringStudentNames.$studentName. ",";
//    }
//}




$stringStudentNames = [];
foreach ($estimatedStudents as $studentName => $mark) {
    if($mark < 3) {
        $stringStudentNames[] = $studentName;
    }
}
$badMarkStudent = implode(',', $stringStudentNames);

echo "Внимание! Студенты $badMarkStudent поставлены на отчисление. Вам необходимо
срочно пересдать экзамен\n";

$currentGroup = $students['БАП1320'];

$randomIndex = array_rand($currentGroup);

$randomStudent = $currentGroup[$randomIndex];

echo "В аудиеторию приглашается $randomStudent\n";

//объединение

//$newGroupName = 'БИТ20';

//foreach ($students as $group => $studentsList) {
//    foreach ($studentsList as $student) {
//        $students[$newGroupName][] = $student;
//    }
//    unset($students[$group]);
//}
//
//print_r($students);

//$students[$newGroupName] = array_merge($students['БАП1320'], $students['ИТ1720']);
//unset($students['БАП1320'], $students['ИТ1720']);

$newGroupName = readline("Введите название новой группы\t");
$groupToMerge = [];
while($groupName = readline("Какие группу будем объединять? \t")) {
    if(array_key_exists($groupName, $students)) {
        $groupToMerge[] = $groupName;
    }else {
        echo "Такая группа уже существует\n";
    }
}
$students[$newGroupName] = [];
foreach ($groupToMerge as $group) {
    $students[$newGroupName] = array_merge($students[$newGroupName], $students[$group]);
    unset($students[$group]);
}
print_r($students);


