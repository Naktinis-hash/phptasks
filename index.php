<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);
$kur_miegosi = 'Nemiegosi';
if ($grizai_velai && !$grizai_isgeres) {
    $h2_eilute = 'grizai velai';
} elseif ($grizai_velai && $grizai_isgeres) {
    $h2_eilute = 'grizai isgeres ir velai';
    $kur_miegosi = 'Miegosi';
} elseif (!$grizai_velai && $grizai_isgeres) {
    $h2_eilute = 'Grizai isgeres';
} elseif (!$grizai_velai && !$grizai_isgeres) {
    $h2_eilute = 'Nieko nepadariau, nemuskit';
}
$h1 = 'Buitine skaiciuokle';
$h2 = "Situacija: $h2_eilute";
$h3 = "Isvada : $kur_miegosi ant sofos";
?>
<html>
    <head>
        <title>Pripiske</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2> <?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <img src="https://i.ytimg.com/vi/chFTjHpHAEM/mqdefault.jpg">
    </body>
</html>