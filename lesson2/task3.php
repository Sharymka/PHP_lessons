<?php
$thumb = 'Большой палец';
$indexFinger = 'Указаткльный палец';
$middleFinger = 'Средний палец';
$ringFinger = 'Безимянный палец';
$pinky = 'Мизинец';

$answer = (int)readline("Введите полочительное число больше 0! ");

while(true){
    if ($answer <= 0) {
        $answer = (int)readline("Введите полочительное число больше 0! ");
        continue;
    }
    $result = $answer % 8;
    switch($result) {
        case 0:
        case 1:
            echo ($thumb);
            break 2;
        case 2:
        case 7:
            echo ($indexFinger);
            break 2;
        case 3:
            echo ($middleFinger);
            break 2;
        case 4:
        case 6:
            echo ($ringFinger);
            break 2;
        case 5:
            echo ($pinky);
            break 2;
    }
}
