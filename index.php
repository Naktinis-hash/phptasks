<?php
$sudas_1 = rand(1, 100);
$sudas_2 = rand(101, 200);
$sudas_3 = rand(201, 300);
$sudas_4 = rand(301, 400);
$h1 = 'Skolos skaiciuokle';
$h3_1 = "Jei paemei:$sudas_1";
$h3_2 = "Su dviem kabanciais grazinsi:$sudas_3";
$h3_3 = "Su vienu kabanciu grazinsi:$sudas_4";
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
