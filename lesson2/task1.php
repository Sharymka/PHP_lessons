<?php
$question = ("В каком году произошло крещение Руси?");
$option1 = 810;
$option2 = 740;
$option3 = 900;
echo "$question
1 - $option1
2 - $option2
3 - $option3" . PHP_EOL;

$answer = (int)readline();

while (true) {
    switch ($answer) {
        case $option1:
        case $option2:
            echo "Ответ неверный!";
            break 2;
        case $option3:
            echo "Ответ верный!";
            break 2;
        default :
            echo "Введите корректное значение!";
            $answer = (int)readline();
    }
}





