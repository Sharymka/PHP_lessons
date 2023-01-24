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

while(true) {
    if ($answer == 1 || $answer == $option1) {
        echo "Ответ неверный!";
        break;
    }elseif ($answer == 2 || $answer == $option2) {
        echo "Ответ неверный!";
        break;
    } elseif ($answer == 3 || $answer == $option3) {
        echo "Поздравляем, вы ответили верно!";
        break;
    } elseif ($answer == null) {
        echo "Введите корректное значение!";
        $answer = (int)readline();
    }

}

//while (true) {
//    switch ($answer) {
//        case (1 || $option1):
//        case (2 || $option2):
//            echo "Ответ неверный!";
//            break;
//        case (3 || $option3):
//            echo "Ответ верный!";
//            break;
//        case null :
//            echo "Введите корректное значение!";
//            $answer = (int)readline();
//    }
//}




