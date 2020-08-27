<?php 
// menghubungkan web dengan database
$db = mysqli_connect("localhost", "root","","data_pengelolaan_laptop");
// ("host", "username-mysql", "password", "nama-database");
// di jadikan variabel supaya lebih mudah dalam input di bawah

function query( $query ){
    global $db; 
    //untuk mendefinisikan bahwa variabel db yang di gunakan adalah variabel global
    // mengambil data
    $result = mysqli_query( $db ,$query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
; ?>