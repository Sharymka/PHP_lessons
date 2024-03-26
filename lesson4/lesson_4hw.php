<?php
//    $array = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
//    $array2 = [9, 5, 3, 4,2, 8, 1,5, 71, 5, 5];
//
//    $oddOrEven = function ($number) {
//
//       return $number % 2 === 0? 'четное': 'нечетное';
//
//    };
//
//    $newArray = array_map($oddOrEven, $array, $array2);
//
//    print_r($newArray);

//замыкание

//function readNonEmptyLine(string $message, ?Closure $onError): int {
//    while(true){
//        $line = readline("число");
//        $number = (int) $line;
//        if($number) {
//            break;
//        }
//        $onError($line);
//    }
//    return $number;
//}
//
//$number = readNonEmptyLine('Введите имя', function ($input) {
//    echo "Вы ввели $input, а надо число\n";
////    echo "Пожалуйста, введите имя\n";
//});



function maxMinAverage (array $array): array {

//    sort($array);
//    print_r($array);
//    $newArray['min'] = $array[0];
//    $newArray['max'] = $array[count($array)-1];
//    $newArray['average'] = array_sum($array) / count($array);




    return ['min'=> min($array), 'max'=>max($array), 'average'=> array_sum($array)/count($array)];
}
//
$newArray = maxMinAverage([1,3,6,5,6,32,1]);
print_r($newArray);

    $box = [
        [
            0 => 'Тетрадь',
            1 => 'Книга',
            2 => 'Настольная игра',
            3 => [
                'Настольная игра',
                'Настольная игра',
            ],
            4 => [
                [
                    'Ноутбук',
                    'Зарядное устройство'
                ],
                [
                    'Компьютерная мышь',
                    'Набор проводов',
                    [
                        'Фотография',
                        'Картина'
                    ]
                ],
                [
                    'Инструкция',
                    [
                        'Ключ'
                    ]
                ]
            ]
        ],
        [
            0 => 'Пакет кошачьего корма',
            1 => [
                'Музыкальный плеер',
                'Книга'
            ]
        ]
    ];


//    function findThingInTheBox(array $box, string $targetThing): bool {
//
//        $result = false;
//
//        foreach ($box as $thing) {
//
//            if($thing === $targetThing) {
//                return true;
//            }
//
//            if(is_array($thing)) {
//                $result = findThingInTheBox($thing, $targetThing );
//            }
//
//            if($result) {
//                break;
//            }
//
//
//        }
//        return $result;
//    }
//
//    $result = findThingInTheBox($box, 'Музыкальный плеер');
//    var_dump($result);

$dirName = '../../.';
//$array = scan dir($dirName);
//$editedFiles = array_slice($array, 2);
//var_dump($editedFiles);

//function findFile(string $fileName, string $path): ?string {
//    $files = scandir($path);
//    $editedFiles = array_slice($files, 2);
////    var_dump($editedFiles);
//
//    foreach ($editedFiles as $file) {
////        var_dump($path);
//        if(is_dir($path .'/'. $file)) {
////            var_dump($path .'/'. $file);
//            $result = findFile($fileName, $path .'/'. $file);
//            if($result !== null){
//                return $result;
//            }
//        }
//        if($fileName === $file) {
//            return $path.'/'.$file;
//        }
//    }
//    return null;
//}
//
//$result = findFile('lesson_3hw.php', $dirName);
//var_dump($result);