<?php 
// menghubungkan web dengan database
$db = mysqli_connect("localhost", "root","","data_pengelolaan_laptop");
// ("host", "username-mysql", "password", "nama-database");
// di jadikan variabel supaya lebih mudah dalam input di bawah

// ambil data dari tabel laptop / query data laptop
$result = mysqli_query($db, "SELECT * FROM laptop");
// ("koneksi", "query mau di apakan")

// ambil data (fetch) dari objek reslut
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array asosiasi
// mysqli_fetch_array() // mengambilkan keduanya
// mysqli_fetch_object()

// while ($lptp = mysqli_fetch_assoc($result)) {
//     var_dump($lptp);
// }

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
        <?php while ( $row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Ubah</a> | <a href="">Hapus</a>
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
        <?php endwhile ; ?>


    </table>
</body>
</html>