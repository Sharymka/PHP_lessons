<?php
$question = 'В каком году произошло крещение Руси?';
echo $question;

$answer1 = '810';
$answer2= '990';
$answer3 = '740';


while (true) {

    echo "Ведите один из вариантов ответа:\n 810 \n 990 \n 740 \n";
    $userAnswer = readline();

    switch (true) {
        case $userAnswer == $answer1:
        case $userAnswer == $answer2:
            echo 'Вы ответили не верно!';
            break 2;
        case $userAnswer == $answer3:
            echo 'Поздравляем, вы ответили верно!';
            break 2;
        default:  echo "Нет такого варианта ответа! \n";
    }
}


