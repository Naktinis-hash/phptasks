<?php
$days = 365;
$pack_price = 3.50;
$count_ttl = 0;

for ($d = 1; $d <= $days; $d++) {
    $weekday = date('N', strtotime('+' . $d . 'day'));

    if ($day_of_week == 7) {
        $cig_sun = rand(1, 3);
        $count_ttl += $cig_sun;
    } elseif ($day_of_week == 6) {
        $cig_sat = rand(10, 20);
        $count_ttl += $cig_sat;
    } else {
        $cig_mon_fri = rand(3, 4);
        $count_ttl += $cig_mon_fri;
    }
}
$price_ttl = ceil($count_ttl / 20) * $pack_price;
$h2 = "Per $days dienas, surukysiu $count_ttl cigareciu uz $price_ttl";
$title = 'Dumai';
$h1 = 'Mano dumu skaiciuokle';
?>
<html>
    <head>
        <title><?php print $title; ?></title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
    </body>
</html>