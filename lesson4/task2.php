<?php
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$result = function (array $arr) {
    $max = $arr[0];
    $min = $arr[0];
    $sum = 0;

    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }

        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }

        $sum += $arr[$i];

    }

    $avr = round($sum / count($arr));

    $result["max"] = $max;
    $result["min"] = $min;
    $result["avr"] = $avr;

   return $result;
};

print_r($result($arr));
