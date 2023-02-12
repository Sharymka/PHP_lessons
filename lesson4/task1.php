<?php
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
print_r($arr);
$checkNumber = function ($number) {

    if ($number % 2 == 0) {
        return "четное";
    } else return "нечетное";

};


$result= array_map($checkNumber, $arr);

print_r($result);