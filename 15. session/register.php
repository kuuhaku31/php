<?php 
require 'functions.php';

if ( isset($_POST["register"]) ) {

    if ( register($_POST) > 0 ){
        echo "<script>
            alert ('user baru telah ditambahkan!');
        </script>";
    } else {
        echo "<script>
            alert ('user baru gagal ditambahkan!');
        </script>";
        echo "<br>";
        echo mysqli_error ($db);
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>register-page</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h2>laman registrasi</h2>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username" size="25">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" size="25">
            </li>
            <li>
                <label for="passwordConf">Konfirmasi password :</label>
                <input type="password" name="passwordConf" id="passwordConf" size="25">
            </li>
        </ul>
        <button type="submit" name="register">Daftar!</button>
    </form>
</body>
</html>