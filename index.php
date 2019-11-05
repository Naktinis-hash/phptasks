<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

for ($i = 1; $i <= $months; $i++) {
    $wallet += $month_income - $month_expenses = rand(600, 1000);

    if ($wallet <= 0) {
        $h2 = "Atsargiai, $months menesi gali baigtis pinigai!";
        break;
    } else {
        $h2 = "Po $months m., prognozuojamas likutis: $wallet";
    }
}

$title = 'Pinigine';
$h1 = 'Wallet forecast';
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