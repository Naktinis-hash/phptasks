<?php

//Skaiciuojame nuo 4 kegliu eiles, tada 3kegliu ir t.t
$array = [
    //Neprivemtas 
    [
        [
            'skyle1' => true,
            'skyle2' => false,
            'skyle3' => false,
            'skyle4' => true,
        ],
        [
            'skyle1' => false,
            'skyle2' => false,
            'skyle3' => true,
        ],
        [
            'skyle1' => false,
            'skyle2' => true,
        ],
        [
            'skyle1' => true,
        ],
    ],
    //Privemtas 
    [
        [
            'skyles' => 'Nenaudojamos del techniniu problemu'
        ],
    ],
];
var_dump($array);

