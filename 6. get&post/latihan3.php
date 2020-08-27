<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <!-- perbedaan get dan post adalah untuk "post" data di kirim dari belakang layar dan untuk "get" sebaliknya   -->
    <?php if ( isset( $_POST["submit"])) : ?>
        <h1>Selamat datang, <?= $_POST["nama"] ?></h1>
    <?php endif; ?>

    <form action="" method="POST">
        <!-- action="latihan4.php" method="post" -->
        <label>Masukkan Nama :</label>
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>