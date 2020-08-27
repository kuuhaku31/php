 <?php 
// menghubungkan web dengan database
$db             = mysqli_connect("localhost", "root","","laptop_db");
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

    // upload gambar
    $pic = uploadGambar();
    if ( !$pic ){
        return false;
    }

    // buat data yang akan di query
    $query = "INSERT INTO laptop
            VALUES
            ('', '$merk', '$nama', '$procie', '$vga', '$ram', '$storage', '$pic')";
    mysqli_query($db , $query);

    return mysqli_affected_rows($db);
}

function uploadGambar () {
    $namaFile   = $_FILES['pic']['name'];
    $ukuranFile = $_FILES['pic']['size'];
    $error      = $_FILES['pic']['error'];
    $tmpName    = $_FILES['pic']['tmp_name'];

    // cek apakah ada yang di upload atau tidak
    if ( $error === 4 ) {
        echo 
            "<script>
                alert ('Pilih gambar terlebih dahulu!');      
            </script>
            ";
        return false;
    }

    // cek file yang diupload(harus gambar)
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode ('.', $namaFile);
    $ekstensiGambar = strtolower (end($ekstensiGambar));

    // cek ekstensi file
    if ( !in_array ($ekstensiGambar, $ekstensiValid) ) {
        echo 
            "<script>
                alert ('Yang anda upload bukan gambar!');      
            </script>
            ";
        return false;
    }

    // cek ukuran gambar yang boleh di upload
    if ( $ukuranFile > 2000000 ) {
        echo 
            "<script>
                alert ('Ukuran gambar anda terlalu besar!');      
            </script>
            ";
        return false;
    }

    // lolos tes di atas :v
    // generate nama file baru untu mencegah file dengan nama sama
    $namaFileBaru = uniqid();
    $namaFileBaru .= ".";
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName , 'img/'. $namaFileBaru);

    return $namaFileBaru;
} 


function hapusData ($id) {
    global $db;
    mysqli_query( $db , "DELETE FROM laptop WHERE id = $id");
    return mysqli_affected_rows($db);
}

function ubahData ($data) {
    global $db;

    // ambil data dari tiap elemen dalam form
    // htmlspecialchar mencegah menampilkan html yang di input user
    $id         = $data["id"];
    $merk       = htmlspecialchars( $data["merk"] );
    $nama       = htmlspecialchars( $data["nama"] );
    $procie     = htmlspecialchars( $data["procie"] );
    $vga        = htmlspecialchars( $data["vga"] );
    $ram        = htmlspecialchars( $data["ram"] );
    $storage    = htmlspecialchars( $data["storage"] );
    $picLama    = htmlspecialchars( $data["picLama"] );

    if ( $_FILES['pic']['error'] === 4 ) {
        $pic = $picLama;
    }else {
        $pic    = uploadGambar();
    }

    // buat data yang akan di query
    $query = "UPDATE laptop SET
                merk = '$merk',
                nama = '$nama',
                procie = '$procie',
                vga = '$vga',
                ram = '$ram',
                storage = '$storage',
                pic = '$pic'
                WHERE id = $id
                ";
    mysqli_query($db , $query);

    return mysqli_affected_rows($db);
}

function cariData($keyword) {
    $query = "SELECT * FROM laptop WHERE
            merk LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            procie LIKE '%$keyword%' OR
            vga LIKE '%$keyword%' OR
            ram LIKE '%$keyword%' OR
            storage LIKE '%$keyword%'
            ";
    return query($query); 
}
?>