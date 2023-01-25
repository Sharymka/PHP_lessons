<?php
$thumb = 'Большой палец';
$indexFinger = 'Указаткльный палец';
$middleFinger = 'Средний палец';
$ringFinger = 'Безимянный палец';
$pinky = 'Мизинец';

$answer = (int)readline("Введите полочительное число больше 0! ");
$var = true;

while($var){
    if ($answer == null) {
        $answer = (int)readline("Введите полочительное число больше 0! ");
        continue;
    }
    $result = $answer % 8;
    switch($result) {
        case 0:
        case 1:
            echo ($thumb);
            $var = false;
            break;
        case 2:
        case 7:
            echo ($indexFinger);
            $var = false;
            break;
        case 3:
            echo ($middleFinger);
            $var = false;
            break;
        case 4:
        case 6:
            echo ($ringFinger);
            $var = false;
            break;
        case 5:
            echo ($pinky);
            $var = false;
            break;
    }
}
