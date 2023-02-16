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
$var = true;

while ($var) {
    switch ($answer) {
        case $option1:
        case $option2:
            echo "Ответ неверный!";
            $var = false;
            break;
        case $option3:
            echo "Ответ верный!";
            $var = false;
            break;
        case null :
            echo "Введите корректное значение!";
            $answer = (int)readline();
    }
}





