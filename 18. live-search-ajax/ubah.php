<?php 
// lakukan session
session_start();
if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
}
require 'functions.php';
// ambil data di URL
$id = $_GET["id"];

// query data dari tabel
$dataLaptop = query("SELECT * FROM laptop WHERE id = $id")[0];


// cek tombol submit sudah di klik atau belum
if ( isset($_POST["submit"]) ) {
    // cek hasil input data berhasil atau tidak
    if ( ubahData($_POST) > 0 ) {
        echo "
            <script>
                alert ('data berhasil diubah!');
                document.location.href = 'index.php'; 
            </script>
            ";
    }else {
        echo "<script>
                alert ('data gagal diubah!');
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
    <title>ubah data</title>
</head>
<body>
    <h1>Ubah Data Laptop</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $dataLaptop["id"]; ?>">
        <input type="hidden" name="picLama" value="<?= $dataLaptop["pic"]; ?>">
        <ul>
            <li>
                <label for="merk">Merk :</label>
                <input type="text" name="merk" id="merk" required value="<?= $dataLaptop["merk"]; ?>">
            </li>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required value="<?= $dataLaptop["nama"]; ?>">
        </li>
        <li>
            <label for="procie">Procie :</label>
            <input type="text" name="procie" id="procie" value="<?= $dataLaptop["procie"]; ?>">
        </li>
        <li>
            <label for="vga">VGA :</label>
            <input type="text" name="vga" id="vga" value="<?= $dataLaptop["vga"]; ?>">
        </li>
        <li>
            <label for="ram">RAM :</label>
            <input type="text" name="ram" id="ram" value="<?= $dataLaptop["ram"]; ?>">
        </li>
        <li>
            <label for="storage">Storage :</label>
            <input type="text" name="storage" id="storage" value="<?= $dataLaptop["storage"]; ?>">
        </li>
        <li>
            <label for="pic">Pic :</label><br>
            <img src="img/<?= $dataLaptop["pic"]; ?>" alt="" width="200px"><br>
            <input type="file" name="pic" id="pic">
        </li>
        <li>
            <button type="submit" name="submit">Ubah Data!</button>
        </li>
    </ul>
</form>
</body>
</html>