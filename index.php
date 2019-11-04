<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);
if ($grizai_velai && !$grizai_isgeres) {
    $h2_eilute = 'grizai velai' ;
    }  else if ($grizai_velai && $grizai_isgeres){
        $h2_eilute = 'grizai isgeres ir velai';
    } elseif (!$grizai_velai && $grizai_isgeres) {
        $h2_eilute = 'Grizai isgeres';
    } elseif (!$grizai_velai && !$grizai_isgeres) {
        $h2_eilute = 'Nieko nepadariau, nemuskit';
    }
    $h1 = 'Buitine skaiciuokle';
    $h2 = "Situacija: $h2_eilute";
    ?>
    <html>
        <head>
            <title>Pripiske</title>
        </head>
        <body>
            <h1><?php print $h1; ?></h1>
            <h2> <?php print $h2; ?></h2>
    </body>
</html>