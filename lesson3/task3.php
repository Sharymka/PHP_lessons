<?php
$name = readline("Как вас зовут? " );

$noun = ["счастья", "здоровья", "успеха", "благополучия", "настроения", "впечатления"];
$adj= ["безграничного", "огромного", "головокружительного", "море", "зажигательного"];

$noun_rand = array_rand($noun, 3);
$adj_rand = array_rand($adj, 3);

$head = "Дорогой(ая) $name, от всего сердца поздравляем Вас с днем рождения, желаем ";

for ($i = 0; $i < 3 ; $i++) {
    $wish[] = $adj[$adj_rand[$i]] ." " . $noun[$noun_rand[$i]];
}

$tail = implode(", ", $wish);
$result = $head . $tail . "!";

echo $result;
