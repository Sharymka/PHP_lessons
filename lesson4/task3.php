<?php
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



$things = [];
function search(string $thing, array $box): bool {

    foreach ($box as $thingOrBox) {

        if (is_string($thingOrBox) && $thing === $thingOrBox) {
            return true;
        }

        if (is_array($thingOrBox)) {
            $isInBox = search($thing, $thingOrBox);
            if ($isInBox) {
                return true;
            }
        }

    }

    return false;
}

var_dump(search('Ключ', $box));