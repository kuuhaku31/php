<?php 
require '../../functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM laptop WHERE
            merk LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            procie LIKE '%$keyword%' OR
            vga LIKE '%$keyword%' OR
            ram LIKE '%$keyword%' OR
            storage LIKE '%$keyword%'
            ";
$data = query($query);

?>
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