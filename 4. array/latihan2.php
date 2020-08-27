<?php
    $students = [
        ["mus", "132456", "IPA", "mageart567@gmail.com"],
        ["bayu", "123412", "IPA", "ahmadbayu@gmail.com"]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome</h1>
    <?php foreach ( $students as $student) : ?>
        <ul>
            <li> Nama : <?= $student[0] ?> </li>
            <li> NIS : <?= $student[1] ?> </li>
            <li> Jurusan : <?= $student[2] ?> </li>
            <li> Email : <?= $student[3] ?> </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
