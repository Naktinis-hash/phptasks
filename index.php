<?php
$months = 12;
$wallet = 1000;
$month_income = 700;
$month_expenses = rand(1, 1000);
for ($i = 1; $i <= $months; $i++) {
    $months_expenses = rand(1, 1000);
    $wallet += $month_income - $month_expenses;
}
$title = 'Pinigine';
$h1 = 'Wallet forecast';
$h2 = "Po $months m., prognozuojamas likutis: $wallet";
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