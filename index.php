<?php
$paskola = rand(1, 100);
$graz_1_kab = rand(201, 300);
$graz_2_kab = rand(301, 400);
$h1 = 'Skolos skaiciuokle';
$h3_1 = "Jei paemei:$paskola jievru";
$h3_2 = "Su dviem kabanciais grazinsi:$graz_1_kab";
$h3_3 = "Su vienu kabanciu grazinsi:$graz_2_kab";
?>
<html>
    <head>
        <title>Kabantys</title>
    </head>
    <body>
        <div>
            <h1><?php print $h1; ?></h1>
            <h3><?php print $h3_1; ?></h3>
            <h3><?php print $h3_2; ?></h3>
            <h3><?php print $h3_3; ?></h3>
        </div>
    </body>
