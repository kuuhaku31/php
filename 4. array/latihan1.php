<?php
    // pengulangan array
    $numbers = [3,4,2,8,33,79,9,74,35,74];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            width: 50px;
            height: 50px;
            margin: 10px;
            line-height: 50px;
            text-align: center;
            background-color: mediumseagreen;
            float: left;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php for ( $i = 0; $i < count($numbers); $i++) :?>
        <div class="box"><?= $numbers[$i] ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php foreach( $numbers as $number) : ?>
        <div class="box"><?= $number ?></div>
    <?php endforeach; ?>
</body>
</html>