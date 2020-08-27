<?php 
    if ( !isset($_GET["pic"] ) ||
        !isset($_GET["merk"] ) ||
        !isset($_GET["nama"] ) ||
        !isset($_GET["procie"] ) ||
        !isset($_GET["vga"] ) ||
        !isset($_GET["ram"] ) ||
        !isset($_GET["storage"] )){
        // redirect : solusi supaya user tidak bisa masuk langsung ke halaman  2
        header("Location: latihan1.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail produk</title>
    <style>
        img{
            width: 200px;
        }
    </style>
</head>
<body>
    <ul>
        <li>
            <img src="img/<?= $_GET["pic"] ?>">
        </li>
        <li>Merk        : <?= $_GET["merk"] ?></li>
        <li>Nama        : <?= $_GET["nama"] ?></li>
        <li>Processor   : <?= $_GET["procie"] ?></li>
        <li>VGA         : <?= $_GET["vga"] ?></li>
        <li>RAM         : <?= $_GET["ram"] ?></li>
        <li>Storage     : <?= $_GET["storage"] ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke halaman 1</a>
</body>
</html>