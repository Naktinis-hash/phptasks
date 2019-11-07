<?php

//Skaiciuojame nuo 4 kegliu eiles, tada 3kegliu ir t.t
$array = [
    //Neprivemtas 
    [
        [
            'busenas' => 'Neprivemtas',
        ],
        '1 eile' => [
            1 => true,
            2 => false,
            3 => false,
            4 => true,
        ],
        '2 eile' => [
            1 => false,
            2 => false,
            3 => true,
        ],
        '3 eile' => [
            1 => false,
            2 => true,
        ],
        '4 eile' => [
            1 => true,
        ],
    ],
    //Privemtas 
    [
        [
            'busena' => 'Privemtas',
        ],
        [
            1 => false,
            2 => false,
            3 => false,
            4 => false,
        ],
        [
            1 => false,
            2 => false,
            3 => false,
        ],
        [
            1 => false,
            2 => false,
        ],
        [
            1 => false,
        ],
    ],
];
var_dump($array);

