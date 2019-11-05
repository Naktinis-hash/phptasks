<?php
$sunny = rand(0, 1);
if ($sunny) {
    $h1 = 'Sauleta';
    $class = 'bg-sunny';
} else {
    $h1 = 'Debesuota su lietum';
    $class = 'bg-rainy';
}
?>
<html>
    <head>
        <title><?php print $title; ?></title>
    </head>
    <style>
        .content {
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .bg-img {
            width: 150px;
            height: 150px;
            background-size: cover;
        }
        .bg-sunny {
            background-image: url("https://images.vexels.com/media/users/3/145134/isolated/preview/46b65a02ff99e7bb4e84d4d3d627a729-sun-sharp-beams-icon-by-vexels.png");
        }
        .bg-rainy {
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGJheJPOzKdEI92PRAjtuz8S7a9YU-UZl1awnwyyEFdWe8V_Ju&s");
        }
    </style>
    <body>
        <div class="content">
            <div class="bg-img <?php print $class; ?>"></div>
            <h1><?php print $h1; ?></h1>
        </div>
    </body>
</html>