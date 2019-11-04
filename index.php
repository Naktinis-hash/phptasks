<?php
$bool = true;
$str = '1';
$flt = 1.23;
$int = 1;
$str = '1.23';
if ($bool == $int) {
    $li_ats = 'Lygus';
} if ($bool === $int) {
    $li_ats = 'Identiski';
}if ($str == $bool) {
    $li_1_ats = 'Lygus';
} if ($str === $bool) {
    $li_1_ats = 'Identiski';
}if ($flt == $str) {
    $li_2_ats = 'Lygus';
} if ($flt === $str) {
    $li_2_ats = 'Identiski';
}
$li = "Bool (true) ir Integer (1): $li_ats";
$li_2 = "String (1) ir Boolean (1): $li_1_ats";
$li_3 = "Float (1.23) ir String (1.23): $li_2_ats";
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <ul>
            <li><?php print $li; ?></li>
            <li><?php print $li_2; ?></li>
            <li><?php print $li_3; ?></li>
        </ul>
    </body>
</html>