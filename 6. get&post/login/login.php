<?php 
// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"]) ) {
    // cek username dan password
    if ($_POST["username"]=="admin" && $_POST["password"]=="admin"){
        // jika benar redirect ke laman admin
        header("Location: admin.php");
        exit;
    }else {    
        // jika salah tampilkan pesan kesalahan
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login dulu gan..</h1>
    <!-- pesan error -->
    <?php if ( isset($error)) : ?>
        <p style="color: red; font-style:italic">Username / Password salah!</p>
    <?php endif; ?>

    <form action="" method="post">
        <li>
            <label for="username">Username :</label>
            <input id="username" type="text" name="username">
        </li>
        <br>
        <li>
            <label for="password">Password :</label>
            <input id="password" type="password" name="password">
        </li>
        <br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>