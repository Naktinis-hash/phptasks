<?php

//Skaiciuojame nuo 4 kegliu eiles, tada 3kegliu ir t.t
$array = [
//Neprivemtas 
[
'Neprivemtas' => [
'busena' => 'Kegliai',
],
 1 => [
1 => true,
 2 => false,
 3 => false,
 4 => true,
],
 2 => [
1 => false,
 2 => false,
 3 => true,
],
 3 => [
1 => false,
 2 => true,
],
 4 => [
1 => true,
],
],
 //Privemtas 
[
'Privemtas' => [
'busena' => 'Kegliai',
],
 1[
1 => false,
 2 => false,
 3 => false,
 4 => false,
],
 2[
1 => false,
 2 => false,
 3 => false,
],
 3[
1 => false,
 2 => false,
],
 4[
1 => false,
],
],
];
var_dump($array);

