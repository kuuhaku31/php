<?php 
require 'functions.php';

// cek tombol submit sudah di klik atau belum
if ( isset($_POST["submit"]) ) {
    // cek hasil input data berhasil atau tidak
    if ( tambahData($_POST) > 0 ) {
        echo "
            <script>
                alert ('data berhasil ditambahkan!');
                document.location.href = 'index.php'; 
            </script>
            ";
    }else {
        echo "<script>
                alert ('data gagal ditambahkan!');
                document.location.href = 'index.php'; 
            </script>";
        echo "<br>";
        echo mysqli_error($db);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>tambah</title>
</head>
<body>
    <h1>Tambah Data Laptop</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="merk">Merk :</label>
                <input type="text" name="merk" id="merk" required>
            </li>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <label for="procie">Procie :</label>
            <input type="text" name="procie" id="procie">
        </li>
        <li>
            <label for="vga">VGA :</label>
            <input type="text" name="vga" id="vga">
        </li>
        <li>
            <label for="ram">RAM :</label>
            <input type="text" name="ram" id="ram">
        </li>
        <li>
            <label for="storage">Storage :</label>
            <input type="text" name="storage" id="storage">
        </li>
        <li>
            <label for="pic">Pic :</label>
            <input type="text" name="pic" id="pic">
        </li>
        <li>
            <button type="submit" name="submit">Kirim Data!</button>
        </li>
    </ul>
</form>
</body>
</html>