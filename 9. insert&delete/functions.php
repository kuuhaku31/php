<?php 
// menghubungkan web dengan database
$db             = mysqli_connect("localhost", "root","","data_pengelolaan_laptop");
// ("host", "username-mysql", "password", "nama-database");
// di jadikan variabel supaya lebih mudah dalam input di bawah

function query( $query ){
    global $db; 
    //untuk mendefinisikan bahwa variabel db yang di gunakan adalah variabel global
    // mengambil data
    $result     = mysqli_query( $db ,$query);
    $rows       = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[]   = $row;
    }
    return $rows;
}

function tambahData($data) {
    global $db;

    // ambil data dari tiap elemen dalam form
    // htmlspecialchar mencegah menampilkan html yang di input user
    $merk       = htmlspecialchars( $data["merk"] );
    $nama       = htmlspecialchars( $data["nama"] );
    $procie     = htmlspecialchars( $data["procie"] );
    $vga        = htmlspecialchars( $data["vga"] );
    $ram        = htmlspecialchars( $data["ram"] );
    $storage    = htmlspecialchars( $data["storage"] );
    $pic        = htmlspecialchars( $data["pic"] );

    // buat data yang akan di query
    $query = "INSERT INTO laptop
            VALUES
            ('', '$merk', '$nama', '$procie', '$vga', '$ram', '$storage', '$pic')";
    mysqli_query( $db , $query);

    return mysqli_affected_rows($db);
}

function hapusData ($id) {
    global $db;
    mysqli_query( $db , "DELETE FROM laptop WHERE id = $id");
    return mysqli_affected_rows($db);
}


?>