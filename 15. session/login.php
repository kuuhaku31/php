<?php 
session_start();

if ( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

if ( isset($_POST["login"]) ) {
    // ambil data username dan password dari post
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query ($db, "SELECT * FROM users WHERE username = '$username'");

    // cek keberadaan username dalam database
    if ( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc ($result);
        if ( password_verify ($password, $row["password"]) ) {
            // buat session dulu gan
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>login page</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    
    <h3>Login dulu gan...</h3>
    <?php if ( isset ($error)) : ?>
        <p style="color: red; font-style:italic">Email / password salah!</p>
    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username" autofocus autocomplete="off">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
        </ul>
        <button type="submit" name="login">Login!</button>
    </form>

</body>
</html>