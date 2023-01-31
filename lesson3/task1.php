<?php
$arr1 = [2, 3, 1, 5, 7, 4, 5, 6, 7, 1];
$arr2 = [5, 1, 2, 6, 9, 5, 3, 2, 3, 4];

$result = [];

for ($i = 0; $i < count($arr1); $i++) {
  $result[] =  $arr1[$i] * $arr2[$i];
}

print_r($result);