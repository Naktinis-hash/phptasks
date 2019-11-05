<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$pavyko = rand(0, 1);
$katasuniai = 0;

for ($c = 1; $c <= $kates; $c++) {
    for ($d = 1; $d <= $sunys; $d++){
        $pavyko = rand(0, 1);
        if ($pavyko);
        $katasuniai++;
        break;
    }
}
$title = 'Orgija';
$h1 = 'Katasuniu iseiga';
$h2 = "Dalyvavo $kates kates ir $sunys sunys";
$h3 = "Katasuniu iseiga: $katasuniai";
?>
<html>
    <head>
        <title><?php print $title; ?></title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
    </body>
</html>