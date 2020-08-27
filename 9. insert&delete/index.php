<?php 
require'functions.php';
// ambil data dari tabel laptop / query data laptop
$data = mysqli_query($db, "SELECT * FROM laptop");

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
    <h1>Daftar Laptop</h1>
    <br>
    <a href="tambah.php">Tambah data barang</a>
    <br><br>
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
                <a href="">Ubah</a> | 
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
</body>
</html>