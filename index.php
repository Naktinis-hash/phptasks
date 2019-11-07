<?php

//Skaiciuojame nuo 4 kegliu eiles, tada 3kegliu ir t.t
$array = [
    //Neprivemtas 
    [
        [
            'busenas' => 'Neprivemtas',
        ],
        '1 eile' => [
            'skyle1' => true,
            'skyle2' => false,
            'skyle3' => false,
            'skyle4' => true,
        ],
        '2 eile' =>[
            'skyle1' => false,
            'skyle2' => false,
            'skyle3' => true,
        ],
        '3 eile' => [
            'skyle1' => false,
            'skyle2' => true,
        ],
        '4 eile' => [
            'skyle1' => true,
        ],
    ],
    //Privemtas 
    [
        [
            'busena' => 'Privemtas',
        ],
                [
            'skyle1' => false,
            'skyle2' => false,
            'skyle3' => false,
            'skyle4' => false,
        ],
        [
            'skyle1' => false,
            'skyle2' => false,
            'skyle3' => false,
        ],
        [
            'skyle1' => false,
            'skyle2' => false,
        ],
        [
            'skyle1' => false,
        ],
    ],
];
var_dump($array);

