<?php
ini_set('xdebug.var_display_max_depth', '10');
ini_set('xdebug.var_display_max_children', '256');
ini_set('xdebug.var_display_max_data', '1024');

$array = [
    [
        [
            'produktas' => 'kiausiniai',
            'kiekis' => 3,
        ],
        [
            'produktas' => 'grietine',
            'kiekis' => 1,
        ],
        [
            'produktas' => 'jogurtas',
            'kiekis' => 2,
        ],
        [
             'produktas' => 'zuvis',
             'kiekis' => 0,
        ],
    ],
    [
        [
            'produktas' => 'pienas',
            'kiekis' => 1,
        ],
        [
            'produktas' => 'kefyras',
            'kiekis' => 0,
        ],
        [
            'produktas' => 'degtine',
            'kiekis' => 2,
        ],
        [
            'produktas' => 'kecupas',
            'kiekis' => 2,
        ],
    ],
     
];
var_dump($array);

