<?php
// lakukan session
session_start();
if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
}

require'functions.php';

// ambil data dari tabel laptop / query data laptop
$data = mysqli_query($db, "SELECT * FROM laptop");

// tombol cari ditekan
if ( isset($_POST["cari"]) ) {
    $data = cariData($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <style>
        img {
            width: 100px;
        }
    </style>
</head>
<body>
    <a href="logout.php" style="font-weight: bold; float: right;
            color: red;
            text-decoration: none;">Log Out</a>
    <h1>Daftar Laptop</h1>
    <br>
    <a href="tambah.php">Tambah data barang</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="40" autofocus autocomplete="off" placeholder="Masukkan keyword pencarian!" id="keyword">
        <button type="submit" name="cari" id="search-btn">Cari!</button>
    </form>
    <br>
<div id="container">
    <table border="1" cellspacing="0" cellpadding="10" >
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Merk</th>
            <th>Nama</th>
            <th>Processor</th>
            <th>VGA</th>
            <th>RAM</th>
            <th>Storage</th>
        </tr>
        
        <?php $i = 1; ?>
        <?php foreach ($data as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> | 
                    <a href="hapus.php?id=<?= $row["id"]; ?>"
                        onclick="return confirm ('Yakin anda akan menghapusnya?');">Hapus</a>
                </td>
                <td>
                    <img src="img/<?= $row["pic"]; ?>">
                </td>
                <td><?= $row["merk"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["procie"]; ?></td>
                <td><?= $row["vga"]; ?></td>
                <td><?= $row["ram"]; ?></td>
                <td><?= $row["storage"]; ?></td>
            </tr>
        <?php $i++; ?>
        <?php endforeach ; ?>
    </table>
</div>

<script src="assets/jquery.js"></script>
<script src="assets/script.js"></script>
</body>
</html>